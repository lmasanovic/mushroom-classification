$.getJSON("mushroom-properties.json", ({
})).done(createForm);

function createForm(json) {
	$.each(json, function(x, item) {
		// console.log(item);
		var fieldset = $(document.createElement("fieldset")).addClass("form-group")
		.append($(document.createElement("legend")).html(item.property_name));

		var divs = [];
		for (var i = 0; i < item.values.length; i++) {
			console.log(item.values[i]);
			var div = $(document.createElement("div")).addClass("form-check");
			div.append($(document.createElement("label"))
			.addClass("form-check-label"))
			.html(" " + item.values[i].name)
			.prepend($(document.createElement("input")).addClass("form-check-input")
			.attr({
				type: "radio",
				name: item.property_name,
				value: item.values[i].index
			}));
			divs.push(div);
		}

		fieldset.append(divs);
		$("form").prepend(fieldset);
	});
}
