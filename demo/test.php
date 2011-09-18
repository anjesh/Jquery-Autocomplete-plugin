<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="../auto.complete.css" />
<script type="text/javascript" src="../auto.complete.js"></script>

<script>
function selectItem(li) {  }

function formatItem(row) { return row; }

$(document).ready(function() {
    $("#keywords").autocomplete("testdata.php", 
        { minChars:1, matchSubset:1, matchContains:1, cacheLength:10, 
        onItemSelect:selectItem, formatItem:formatItem, selectOnly:1, mode:"multiple", separator:","        
        });
});        
</script>

<textarea name="keywords" cols="50" rows="3" id="keywords" value="" ></textarea> 
