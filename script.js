$.getJSON("mushroom-properties.json", ({
})).done(createForm);

function createForm(json) {
	$.each(json, function(i, property) {
		var fieldset = $(document.createElement("fieldset")).addClass("form-group")
		.append($(document.createElement("legend")).html(property.property_name));

		var divs = [];
		$.each(property.values, function(j, value) {
			var div = $(document.createElement("div")).addClass("form-check");

			var label = ($(document.createElement("label"))
			.addClass("form-check-label"))
			.html(" " + value.name);

			label.prepend($(document.createElement("input")).addClass("form-check-input")
			.attr({
				type: "radio",
				name: property.property_name,
				value: value.index
			}));

			div.append(label);
			divs.push(div);
		});
		var div = $(document.createElement("div")).addClass("form-check");
		var label = ($(document.createElement("label"))
		.addClass("form-check-label"))
		.html(" Not sure");

		label.prepend($(document.createElement("input")).addClass("form-check-input")
		.attr({
			type: "radio",
			name: "not sure",
			value: "null"
		}));
		div.append(label);
		divs.push(div);

		fieldset.append(divs);
		$("form").prepend(fieldset);
	});
}


function createDivForForms(name, value) {

}
