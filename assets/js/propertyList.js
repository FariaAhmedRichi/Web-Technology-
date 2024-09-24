function validateForm() {
  var title = document.getElementById("title").value;
  var description = document.getElementById("description").value;
  var price = document.getElementById("price").value;
  var location = document.getElementById("location").value;
  var propertyType = document.getElementById("property_type").value;

  // Check if title is filled
  if (title.trim() === "") {
      alert("Please enter the property title.");
      return false;
  }

  // Check if description is filled
  if (description.trim() === "") {
      alert("Please enter a property description.");
      return false;
  }

  // Check if price is filled and is a valid number
  if (price <= 0) {
      alert("Please enter a valid price greater than 0.");
      return false;
  }

  // Check if location is filled
  if (location.trim() === "") {
      alert("Please enter the property location.");
      return false;
  }

  // Check if property type is selected
  if (propertyType === "") {
      alert("Please select a property type.");
      return false;
  }

  return true; // All checks passed, form can be submitted
}

// Add event listener to validate on form submission
document.querySelector("form").onsubmit = function() {
  return validateForm();
};
