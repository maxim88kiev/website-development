<?php

namespace AMBase\Podelu\Comments\Usecases;

use AMBase\Podelu\App;
use Bitrix\Main\Loader;
use \CIBlockElement;
use \CIBlockSection;

class CommentAddUsecase
{
    private $section;
    private $iblockId;
    private $request;
    private $app;

    public function __construct($iblockId, CommentAddRequest $request)
    {
        $this->section = new CIBlockSection;
        $this->iblockId = $iblockId;
        $this->request = $request;
        $this->app = App::getInstance();
    }

    public function execute()
    {
        if (!empty($this->request->parentId)) {
            return $this->addCommentByParentId();
        }

        $entity = $this->getCommentableEntity();
        if (empty($entity)) {
            return new CommentAddResponse('Комментируемая сущность не найдена');
        }

        $arFilter = ['IBLOCK_ID' => $this->iblockId, 'NAME' => $entity['NAME']];
        $arSection = $this->section->GetList([], $arFilter)->Fetch();
        $sectionId = $arSection['ID'];
        if (empty($sectionId)) {
            $arFields = [
                'IBLOCK_ID' => $this->iblockId,
                'NAME' => $entity['NAME'],
                'UF_ENTITY_ID' => $entity['ID'],
            ];
            $sectionId = $this->section->Add($arFields);
            if (empty($sectionId)) {
                return new CommentAddResponse($this->section->LAST_ERROR);
            }
        }

        $arFields = [
            'IBLOCK_ID' => $this->iblockId,
            'IBLOCK_SECTION_ID' => $sectionId,
            'NAME' => $this->request->name,
            'DESCRIPTION' => $this->request->text,
        ];
        $sectionId = $this->section->Add($arFields);
        if (empty($sectionId)) {
            return new CommentAddResponse($this->section->LAST_ERROR);
        }

        $this->updateCountComments();

        return new CommentAddResponse();
    }

    private function addCommentByParentId()
    {
        $arFilter = ['IBLOCK_ID' => $this->iblockId, 'ID' => $this->request->parentId];
        $arSection = $this->section->GetList([], $arFilter)->Fetch();
        $sectionId = $arSection['ID'];
        if (empty($sectionId)) {
            return new CommentAddResponse('Комментарий не найден');
        }

        $arFields = [
            'IBLOCK_ID' => $this->iblockId,
            'IBLOCK_SECTION_ID' => $sectionId,
            'NAME' => $this->request->name,
            'DESCRIPTION' => $this->request->text,
        ];
        $sectionId = $this->section->Add($arFields);
        if (empty($sectionId)) {
            return new CommentAddResponse($this->section->LAST_ERROR);
        }

        return new CommentAddResponse();
    }

    private function getCommentableEntity()
    {
        if (empty($this->request->elementId)) {
            return false;
        }

        return CIBlockElement::GetByID($this->request->elementId)->Fetch();
    }

    private function updateCountComments()
    {
        Loader::includeModule('iblock');

        $arFilter = [
            'IBLOCK_ID' => $this->app->container->get('iblock.comments.id'),
            'DEPTH_LEVEL' => 1
        ];
        $iBlockResult = \CIBlockSection::GetList([], $arFilter);
        while($arSection = $iBlockResult->Fetch()) {
            $countComments = \CIBlockSection::GetCount([
                '!ID' => $arSection['ID'],
                'IBLOCK_ID' => $arSection['IBLOCK_ID'],
                'LEFT_MARGIN' => $arSection['LEFT_MARGIN'],
                'RIGHT_MARGIN' => $arSection['RIGHT_MARGIN'],
            ]);

            if (!$countComments) {
                continue;
            }

            $arElement = $this->getElementByName($arSection['NAME']);
            $propertyValues = ['COUNT_COMMENTS' => $countComments];
            \CIBlockElement::SetPropertyValuesEx($arElement['ID'], $arElement['IBLOCK_ID'], $propertyValues);
        }
    }

    private function getElementByName($name)
    {
        $arFilter = [
            'IBLOCK_ID' => $this->app->container->get('iblock.article.id'),
            'NAME' => $name
        ];

        return \CIBlockElement::GetList([], $arFilter)->Fetch();
    }
}
