$.getJSON("./data/mushroom-properties.json", ({
})).done(createForm);

$(function() {

});

function createForm(json) {
	$.each(json, function(i, property) {

		var fieldset = $(document.createElement("fieldset")).addClass("form-group")
		.append($(document.createElement("legend")).html(property.name_eng));

		// Container div for values
		var valuesContainer = $(document.createElement("div"));

		if(property.image == "color") {
			valuesContainer.addClass("div-colors");
		}

		// Create divs for each value
		$.each(property.values, function(j, value) {
			var div = createPropertyValueDiv(value.name, property.property_name, value.index, property.image);
			valuesContainer.append(div);
		});

		// Add not sure option for every property
		var imageNotSure = (property.image) ? "not_sure_mushroom.jpg" : false;
		valuesContainer.append(createPropertyValueDiv(" not sure", property.property_name, "null", imageNotSure));

		fieldset.append(valuesContainer);
		$("form").append(fieldset);
	});

	// Set not sure option as default
	$("input.form-check-input[value='null']").attr({checked: "checked"});

	// Append submit button
	$("form").append($(document.createElement("button"))
	.html("Submit")
	.addClass("btn")
	.attr({
		id: "submit-button",
		type: "submit",
		name: "submit",
		value: "submit"
	}));
}

function createPropertyValueDiv(value, property, index, imageLoc) {
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

	// Add image/color if exists
	if(imageLoc) {
		var image;
		if(imageLoc != "color") {
			var imgSrc = "images/" +  imageLoc;
			var imageClasses = "img-responsive";
			if(index != "null") {
				imgSrc += "/" + value + ".jpg";
			}

			image = $(document.createElement("img"))
			.addClass(imageClasses)
			.attr({
				src: imgSrc,
				alt: value
			});
		} else {
			image = $(document.createElement("div"))
			.css("background-color", function() {
				if(value == "buff") {
					return "#F0DC82";
				} else if (value == "cinnamon") {
					return "#C58917";
				}
				return value;
			})
			.addClass("colorRect");
		}
		label.prepend(image);
	}

	div.append(label);
	return div;
}
