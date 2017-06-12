$.getJSON("./data/mushroom-properties.json", ({
})).done(createForm);

function createForm(json) {
	$.each(json, function(i, property) {

		var fieldset = $(document.createElement("fieldset")).addClass("form-group")
		.append($(document.createElement("legend")).html(property.name_eng));

		// Container div for values
		var valuesContainer = $(document.createElement("div"));

		$.each(property.values, function(j, value) {
			var div = createPropertyValueDiv(value.name, property.property_name, value.index);
			valuesContainer.append(div);
		});

		// Add not sure option for every property
		valuesContainer.append(createPropertyValueDiv(" not sure", property.property_name, "null"));

		// Add image if exists
		if(property.image) {
			fieldset.append($(document.createElement("img"))
			.addClass("img-responsive")
			.attr({
				src: "images/" + property.image,
				alt: property.name_eng
			}));
		}

		fieldset.append(valuesContainer);
		$("form").append(fieldset);
	});

	// Set not sure option as default
	$("input.form-check-input[value='null']").attr({checked: "checked"});

	// Append submit button
	$("form").append($(document.createElement("button"))
	.html("Submit")
	.addClass("btn btn-primary")
	.attr({
		type: "submit",
		name: "submit",
		value: "submit"
	}));
}

function createPropertyValueDiv(value, property, index) {
	var div = $(document.createElement("div")).addClass("form-check inline-block");

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
