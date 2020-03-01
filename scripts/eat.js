const sweet = ["Banana", "Strawberry", "Kiwi", "Cream", "Nutella", "Powder sugar", "Brown sugar", "Maple syrup", "Chocolate sauce", "Siroop"];

const savoury = ["Cheese", "Bacon", "Ham", "Onion", "Mushroom", "Spinach", "Egg", "Parsley", "Maple syrup", "Siroop"]



sweet.forEach((item) => {
    var label = document.createElement("label");
    var description = document.createTextNode(item);

    var checkbox = document.createElement("input");
    checkbox.type = "checkbox"; // make the element a checkbox
    checkbox.value = item; // make its value "pair"
    checkbox.name = "ingredients[]"; // give it a name we can check on the server side

    var br = document.createElement("br");

    label.appendChild(checkbox); // add the box to the element
    label.appendChild(description); // add the description to the element

    // add the label element to your div
    document.getElementById('sweetIngredients').appendChild(label);
    document.getElementById('sweetIngredients').appendChild(br);
});

savoury.forEach((item) => {
    var label = document.createElement("label");
    var description = document.createTextNode(item);

    var checkbox = document.createElement("input");
    checkbox.type = "checkbox"; // make the element a checkbox
    checkbox.value = item; // make its value "pair"
    checkbox.name = "ingredients[]"; // give it a name we can check on the server side

    var br = document.createElement("br");

    label.appendChild(checkbox); // add the box to the element
    label.appendChild(description); // add the description to the element

    // add the label element to your div
    document.getElementById('savouryIngredients').appendChild(label);
    document.getElementById('savouryIngredients').appendChild(br);
});