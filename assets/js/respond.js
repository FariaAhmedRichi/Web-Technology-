function validateInquiryId(inquiry_id) {
  return inquiry_id.trim() !== ""; 
}

function validateAgentName(agent_name) {
  if (agent_name.trim() === "") {
      return false;
  }
  return true;
}

function validateClientName(client_name) {
  if (client_name.trim() === "") {
      return false;
  }
  return true;
}

function validateResponseMessage(response_message) {
  return response_message.trim() !== "";
}

function validateResponseDate(response_date) {
  return response_date.trim() !== "";
}

function validateForm() {
  var inquiry_id = document.forms["respondForm"]["inquiry_id"].value;
  var agent_name = document.forms["respondForm"]["agent_name"].value;
  var client_name = document.forms["respondForm"]["client_name"].value;
  var response_message = document.forms["respondForm"]["response_message"].value;
  var response_date = document.forms["respondForm"]["response_date"].value;

  if (!validateInquiryId(inquiry_id)) {
      alert("Please enter a valid Inquiry ID.");
      return false;
  }

  if (!validateAgentName(agent_name)) {
      alert("Please enter the agent's name.");
      return false;
  }

  if (!validateClientName(client_name)) {
      alert("Please enter the client's name.");
      return false;
  }

  if (!validateResponseMessage(response_message)) {
      alert("Please enter a response message.");
      return false;
  }

  if (!validateResponseDate(response_date)) {
      alert("Please select a valid response date.");
      return false;
  }

  return true;
}
