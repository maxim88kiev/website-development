<input type="text" id="test1" value="+38 (096) 544 79 55">
<style>
    input {
        outline: none;
        padding: 5px;
        border: 5px solid;
    }

    input[data-valid="true"] {
        border: 5px solid green;
    }

    input[data-valid="false"] {
        border: 5px solid red;
    }
</style>
<script src="/templates/lasercity/js/util.js"></script>
<script src="/templates/lasercity/js/plugins.js"></script>
<script>
    window.plugins.setMask({
        selector: '#test1',
        mask: '+38 (0##) ### ## ##',
        /*placeholderRegex: [
            {
                index: [1,2],
                regex: /\w/
            }
        ],*/
    });
</script>