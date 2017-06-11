$.getJSON("mushroom-properties.json", ({
})).done(createForm);

function createForm(json) {
	$.each(json, function(i, property) {
		var fieldset = $(document.createElement("fieldset")).addClass("form-group")
		.append($(document.createElement("legend")).html(property.property_name));

		var divs = [];
		$.each(property.values, function(j, value) {
			var div = createDivForForm(value.name, property.property_name, value.index);
			divs.push(div);
		});
		var div = createDivForForm(" not sure", property.property_name, "null");
		divs.push(div);

		fieldset.append(divs);
		$("form").prepend(fieldset);
	});

	$("input.form-check-input[value='null']").attr({checked: "checked"});
}


function createDivForForm(value, property, index) {
	var div = $(document.createElement("div")).addClass("form-check");

	var label = ($(document.createElement("label"))
	.addClass("form-check-label"))
	.html(" " + value); //value.name

	label.prepend($(document.createElement("input")).addClass("form-check-input")
	.attr({
		type: "radio",
		name: property, //property.property_name
		value: index //value.index
	}));

	div.append(label);
	return div;
}
