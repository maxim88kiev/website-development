(window["aioseopjsonp"]=window["aioseopjsonp"]||[]).push([["search-appearance-Taxonomies-vue","search-appearance-partials-Advanced-vue","search-appearance-partials-TitleDescription-vue"],{"0844":function(t,e,s){"use strict";s.r(e);var n=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"aioseo-sa-ct-advanced"},[s("core-settings-row",{attrs:{name:t.strings.robotsSetting},scopedSlots:t._u([{key:"content",fn:function(){return[s("core-robots-meta",{attrs:{options:t.options.advanced.robotsMeta,mainOptions:t.options}})]},proxy:!0}])}),t.showBulk?s("core-settings-row",{attrs:{name:t.strings.bulkEditing,align:""},scopedSlots:t._u([{key:"content",fn:function(){return[s("base-radio-toggle",{attrs:{name:t.object.name+"BulkEditing",options:[{label:t.$constants.GLOBAL_STRINGS.disabled,value:"disabled"},{label:t.$constants.GLOBAL_STRINGS.enabled,value:"enabled"},{label:t.strings.readOnly,value:"read-only"}]},model:{value:t.options.advanced.bulkEditing,callback:function(e){t.$set(t.options.advanced,"bulkEditing",e)},expression:"options.advanced.bulkEditing"}})]},proxy:!0}],null,!1,3216224115)}):t._e(),t.noMetaBox||t.isUnlicensed&&"taxonomies"===t.type?t._e():s("core-settings-row",{attrs:{name:t.strings.otherOptions},scopedSlots:t._u([{key:"content",fn:function(){return[s("div",{staticClass:"other-options"},[s("base-toggle",{model:{value:t.options.advanced.showMetaBox,callback:function(e){t.$set(t.options.advanced,"showMetaBox",e)},expression:"options.advanced.showMetaBox"}},[t._v(" "+t._s(t.showMetaBox)+" ")])],1)]},proxy:!0}],null,!1,430458522)}),t.mainOptions.searchAppearance.advanced.useKeywords&&t.includeKeywords?s("core-settings-row",{attrs:{name:t.strings.keywords,align:""},scopedSlots:t._u([{key:"content",fn:function(){return[s("base-select",{attrs:{multiple:"",taggable:"",options:t.getJsonValue(t.options.advanced.keywords)||[],value:t.getJsonValue(t.options.advanced.keywords)||[],"tag-placeholder":t.strings.tagPlaceholder},on:{input:function(e){return t.options.advanced.keywords=t.setJsonValue(e)}}})]},proxy:!0}],null,!1,4182382651)}):t._e()],1)},o=[],i=s("5530"),a=s("2f62"),r=s("9c0e"),c={mixins:[r["d"],r["f"]],props:{type:{type:String,required:!0},object:{type:Object,required:!0},options:{type:Object,required:!0},showBulk:Boolean,noMetaBox:Boolean,includeKeywords:Boolean},data:function(){return{titleCount:0,descriptionCount:0,strings:{robotsSetting:this.$t.__("Robots Meta Settings",this.$td),bulkEditing:this.$t.__("Bulk Editing",this.$td),readOnly:this.$t.__("Read Only",this.$td),otherOptions:this.$t.__("Other Options",this.$td),showDateInGooglePreview:this.$t.__("Show Date in Google Preview",this.$td),keywords:this.$t.__("Keywords",this.$td)}}},computed:Object(i["a"])(Object(i["a"])(Object(i["a"])({},Object(a["e"])({mainOptions:"options"})),Object(a["c"])(["isUnlicensed"])),{},{title:function(){return this.$t.sprintf(this.$t.__("%1$s Title",this.$td),this.object.singular)},showPostThumbnailInSearch:function(){return this.$t.sprintf(this.$t.__("Show %1$s Thumbnail in Google Custom Search",this.$td),this.object.singular)},showMetaBox:function(){return this.$t.sprintf(this.$t.__("Show %1$s Meta Box",this.$td),"AIOSEO")}})},l=c,u=(s("3d63"),s("2877")),d=Object(u["a"])(l,n,o,!1,null,null,null);e["default"]=d.exports},"219a":function(t,e,s){"use strict";s.r(e);var n=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"aioseo-search-appearance-taxonomies"},t._l(t.taxonomies,(function(e,n){return s("core-card",{key:n,attrs:{slug:e.name+"SA"},scopedSlots:t._u([{key:"header",fn:function(){return[s("div",{staticClass:"icon dashicons",class:""+(e.icon||"dashicons-admin-post")}),s("div",[t._v(" "+t._s(e.label)+" ")])]},proxy:!0},t.isCustomTaxonomy(e)&&t.isUnlicensed?null:{key:"tabs",fn:function(){return[s("core-main-tabs",{attrs:{tabs:t.tabs,showSaveButton:!1,active:t.settings.internalTabs[e.name+"SA"],internal:""},on:{changed:function(s){return t.processChangeTab(e.name,s)}}})]},proxy:!0}],null,!0)},[t.isCustomTaxonomy(e)&&t.isUnlicensed?s("core-blur",[s("title-description",{attrs:{object:e,separator:t.options.searchAppearance.global.separator,options:{show:!0},type:"taxonomies","show-bulk":!1,edit:!1}})],1):t._e(),t.isCustomTaxonomy(e)&&t.isUnlicensed?s("cta",{attrs:{"cta-link":t.$links.getPricingUrl("custom-taxonomies","custom-taxonomies-upsell"),"button-text":t.strings.ctaButtonText,"learn-more-link":t.$links.getUpsellUrl("custom-taxonomies",null,"home")},scopedSlots:t._u([{key:"header-text",fn:function(){return[t._v(" "+t._s(t.strings.ctaHeader)+" ")]},proxy:!0},{key:"description",fn:function(){return[t._v(" "+t._s(t.strings.ctaDescription)+" ")]},proxy:!0}],null,!0)}):t._e(),t.isCustomTaxonomy(e)&&t.isUnlicensed?t._e():s("transition",{attrs:{name:"route-fade",mode:"out-in"}},[s(t.settings.internalTabs[e.name+"SA"],{tag:"component",attrs:{object:e,separator:t.options.searchAppearance.global.separator,options:t.options.searchAppearance.dynamic.taxonomies[e.name],type:"taxonomies","show-bulk":!1}})],1)],1)})),1)},o=[],i=(s("b0c0"),s("5530")),a=s("2f62"),r=s("0844"),c=s("587e"),l={components:{Advanced:r["default"],TitleDescription:c["default"]},data:function(){return{internalDebounce:null,strings:{ctaButtonText:this.$t.__("Upgrade to Pro and Unlock Custom Taxonomies",this.$td),ctaDescription:this.$t.sprintf(this.$t.__("%1$s %2$s lets you set the SEO title and description for custom taxonomies. You can also control all of the robots meta and other options just like the default category and tags taxonomies.",this.$td),"AIOSEO","Pro"),ctaHeader:this.$t.sprintf(this.$t.__("Custom Taxonomy Support is only available for licensed %1$s %2$s users.",this.$td),"AIOSEO","Pro")},tabs:[{slug:"title-description",name:this.$t.__("Title & Description",this.$tdPro),access:"aioseo_manage_seo",pro:!1},{slug:"advanced",name:this.$t.__("Advanced",this.$tdPro),access:"aioseo_manage_seo",pro:!1}]}},computed:Object(i["a"])(Object(i["a"])(Object(i["a"])({},Object(a["c"])(["isUnlicensed"])),Object(a["e"])(["options","settings"])),{},{taxonomies:function(){return this.$aioseo.postData.taxonomies}}),methods:Object(i["a"])(Object(i["a"])({},Object(a["b"])(["changeTab"])),{},{isCustomTaxonomy:function(t){return"category"!==t.name&&"post_tag"!==t.name},processChangeTab:function(t,e){var s=this;this.internalDebounce||(this.internalDebounce=!0,this.changeTab({slug:"".concat(t,"SA"),value:e}),setTimeout((function(){s.internalDebounce=!1}),50))}})},u=l,d=(s("c74c"),s("2877")),p=Object(d["a"])(u,n,o,!1,null,null,null);e["default"]=p.exports},"3d63":function(t,e,s){"use strict";var n=s("7a06"),o=s.n(n);o.a},"587e":function(t,e,s){"use strict";s.r(e);var n=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"aioseo-sa-ct-title-description"},[s("core-settings-row",{attrs:{name:t.strings.showInSearchResults,align:""},scopedSlots:t._u([{key:"content",fn:function(){return[t.edit?s("base-radio-toggle",{attrs:{name:t.object.name+"ShowInSearch",options:[{label:t.$constants.GLOBAL_STRINGS.no,value:!1,activeClass:"dark"},{label:t.$constants.GLOBAL_STRINGS.yes,value:!0}]},model:{value:t.options.show,callback:function(e){t.$set(t.options,"show",e)},expression:"options.show"}}):t._e(),t.edit?t._e():s("base-radio-toggle",{attrs:{value:!0,name:t.object.name+"ShowInSearch",options:[{label:t.$constants.GLOBAL_STRINGS.no,value:!1,activeClass:"dark"},{label:t.$constants.GLOBAL_STRINGS.yes,value:!0}]}}),s("div",{staticClass:"aioseo-description"},[t._v(" "+t._s(t.strings.noIndexDescription)+" ")])]},proxy:!0}])}),t.edit&&t.options.show?s("core-settings-row",{attrs:{name:t.$constants.GLOBAL_STRINGS.preview},scopedSlots:t._u([{key:"content",fn:function(){return[s("core-google-search-preview",{attrs:{title:t.options.title,separator:t.separator,description:t.options.metaDescription}})]},proxy:!0}],null,!1,3395425131)}):t._e(),t.options.show?s("core-settings-row",{attrs:{name:t.title},scopedSlots:t._u([{key:"content",fn:function(){return[t.edit?s("core-html-tags-editor",{attrs:{"line-numbers":!1,single:"","tags-context":t.object.name+"Title","default-tags":t.$tags.getDefaultTags(t.type,t.object.name,"title")},scopedSlots:t._u([{key:"tags-description",fn:function(){return[t._v(" "+t._s(t.strings.clickToAddTitle)+" ")]},proxy:!0}],null,!1,3106947238),model:{value:t.options.title,callback:function(e){t.$set(t.options,"title",e)},expression:"options.title"}}):t._e(),t.edit?t._e():s("core-html-tags-editor",{attrs:{"line-numbers":!1,single:"","tags-context":t.object.name+"Title","default-tags":t.$tags.getDefaultTags(t.type,t.object.name,"title")},scopedSlots:t._u([{key:"tags-description",fn:function(){return[t._v(" "+t._s(t.strings.clickToAddTitle)+" ")]},proxy:!0}],null,!1,3106947238)})]},proxy:!0}],null,!1,198146199)}):t._e(),t.options.show?s("core-settings-row",{attrs:{name:t.strings.metaDescription},scopedSlots:t._u([{key:"content",fn:function(){return[t.edit?s("core-html-tags-editor",{attrs:{"line-numbers":!1,description:"","tags-context":t.object.name+"Description","default-tags":t.$tags.getDefaultTags(t.type,t.object.name,"description")},scopedSlots:t._u([{key:"tags-description",fn:function(){return[t._v(" "+t._s(t.strings.clickToAddDescription)+" ")]},proxy:!0}],null,!1,1726597184),model:{value:t.options.metaDescription,callback:function(e){t.$set(t.options,"metaDescription",e)},expression:"options.metaDescription"}}):t._e(),t.edit?t._e():s("core-html-tags-editor",{attrs:{"line-numbers":!1,"tags-context":t.object.name+"Description","default-tags":t.$tags.getDefaultTags(t.type,t.object.name,"description")},scopedSlots:t._u([{key:"tags-description",fn:function(){return[t._v(" "+t._s(t.strings.clickToAddDescription)+" ")]},proxy:!0}],null,!1,1726597184)})]},proxy:!0}],null,!1,2372372956)}):t._e()],1)},o=[],i=s("9c0e"),a={mixins:[i["f"]],props:{type:{type:String,required:!0},object:{type:Object,required:!0},separator:{type:String,required:!0},options:{type:Object,required:!0},edit:{type:Boolean,default:function(){return!0}}},data:function(){return{titleCount:0,descriptionCount:0,strings:{showInSearchResults:this.$t.__("Show in Search Results",this.$td),clickToAddTitle:this.$t.__("Click on the tags below to insert variables into your title.",this.$td),metaDescription:this.$t.__("Meta Description",this.$td),clickToAddDescription:this.$t.__("Click on the tags below to insert variables into your meta description.",this.$td),noIndexDescription:this.$t.__('Selecting "No" will no-index this page.',this.$td)}}},watch:{show:function(t){this.options.advanced.robotsMeta.noindex=!t,t||(this.options.advanced.robotsMeta.default=!1)}},computed:{title:function(){return this.$t.sprintf(this.$t.__("%1$s Title",this.$td),this.object.singular)},show:function(){return this.options.show}},methods:{}},r=a,c=s("2877"),l=Object(c["a"])(r,n,o,!1,null,null,null);e["default"]=l.exports},"58e8":function(t,e,s){},"7a06":function(t,e,s){},c74c:function(t,e,s){"use strict";var n=s("58e8"),o=s.n(n);o.a}}]);