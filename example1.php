
<script>
  var subtypes1 = ["Blue", "Red"];
  var subtypes2 = ["Yellow", "Green"];

  function toggleSubtype(obj) {
    console.log('toggling...');
    var type = $(obj).find('option:selected').val();
    var sub = $(obj).closest('.type_div').find('.subtype_id');

    // Remove current subtypes
    $(sub).empty();

    // Populate matching subtypes
    if (type === "1") {
      $.each(subtypes1, function (i, val) {
        $(sub).append($("<option></option>").attr("value", val).text(val));
      });
    } else {
      $.each(subtypes2, function (i, val) {
        $(sub).append($("<option></option>").attr("value", val).text(val));
      });
    }
  }
</script>

<div class="type_div">
    Widget Type:
    <select name="type_id[]" onchange="toggleSubtype(this)">
        <option></option>
        <option value="1">Consumer</option>
        <option value="2">Business</option>
    </select>

    Widget Subtype:
    <select name="subtype_id[]" class="subtype_id">
    </select>
</div>

