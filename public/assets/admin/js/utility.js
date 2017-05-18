


// function createTeam(name, id_selector) {

// 	if(name == null || name == "") {
// 		$("#team_create_log").html("Team Name is Required");
// 		$("#add_team_name").focus();
// 		return;
// 	}


// 	$.ajax({
// 		type: 'post',
// 		url: baseUrl + "/team/add",
// 		data: {"_token":_token,"name":name},
// 		beforeSend: function() { displayWait(id_selector); },
// 		success: function(response) {
// 			cancelWait(id_selector);
// 			if(!response.error) {
// 				swal({
// 							title: "Success!",
// 							text: "" + response.success,
// 							type: "success",
// 							confirmButtonClass: "btn-success"
// 					});
// 				window.location.reload();
// 			} else {
// 				swal("Oops...", ""+response.error, "error");
// 			}	
// 		},
// 		error: function() {
// 			cancelWait(id_selector);
// 			// $("#team_create_log").html("Something went wrong. Try again please");
// 			swal("Oops...", "Something went wrong. Try again please", "error");
// 		}
//  	});
// }


// function addTeamMember(teamName, email, id_selector) {

// 	if(teamName == null || teamName == "" || email == null || email == "") {
// 		$("#add_member_log").html("Team Name and user email is Required");
// 		return;
// 	}

// 	$.ajax({
// 		type: 'post',
// 		url: baseUrl + "/team/member/add",
// 		data: {"_token":_token,"name":teamName, "email":email},
// 		beforeSend: function() { displayWait(id_selector); $("#team_add_log").html(); },
// 		success: function(response) {
// 			cancelWait(id_selector);
// 			$("#add_member_log").html("" + response.success);
// 			if(!response.error) {
// 				swal({
// 							title: "Success!",
// 							text: "" + response.success,
// 							type: "success",
// 							confirmButtonClass: "btn-success"
// 					});	
// 				window.location.reload();
// 			} else {
// 				swal("Oops...", ""+response.error, "error");
// 			}	
// 		},
// 		error: function(response) {
// 			cancelWait(id_selector);
// 			swal("Oops...", "Something went wrong. Try again please", "error");
// 		}
//  	});
// }


// function removeTeamMember(teamName, email, id_selector) {

// 	if(teamName == null || teamName == "" || email == null || email == "") {
// 		$("#remove_member_log").html("Team Name and user email is Required");
// 		return;
// 	}

// 	$.ajax({
// 		type: 'post',
// 		url: baseUrl + "/team/member/remove",
// 		data: {"_token":_token,"name":teamName, "email":email},
// 		beforeSend: function() { displayWait(id_selector); $("#team_add_log").html(); },
// 		success: function(response) {
// 			cancelWait(id_selector);
// 			if(!response.error) {
// 				// $("#remove_member_log").html("" + response.success);
// 				swal({
// 							title: "Deleted!",
// 							text: "" + response.success,
// 							type: "success",
// 							confirmButtonClass: "btn-success"
// 					});
// 				window.location.reload();
// 			 } else {
// 			 	swal("Oops...", ""+response.error, "error");
// 			 }		
// 		},
// 		error: function(response) {
// 			cancelWait(id_selector);
// 			swal("Oops...", "Something went wrong. Try again please", "error");
// 		}
//  	});
// }


// function addSkill(skill, id_selector) {

	
// 	if(skill == null || skill == "" ) {
// 		swal("Error", "Skill Name is Required", "error");
// 		return;
// 	}

// 	$.ajax({
// 		type: 'post',
// 		url: baseUrl + "/app/skill/add",
// 		data: {"_token":_token,"skill":skill},
// 		beforeSend: function() { displayWait(id_selector); },
// 		success: function(response) {
// 			cancelWait(id_selector);
// 			if(!response.error) {
// 				$("#skill-list-section").html(response);
// 				$("#languages_select").val("");
// 				swal({
// 							title: "Success!",
// 							text: "Operation Successful",
// 							type: "success",
// 							confirmButtonClass: "btn-success"
// 					});	
// 			} else {
// 				$("#add_skill_log").html(response.error);
// 			}	
// 		},
// 		error: function(response) {
// 			cancelWait(id_selector);
// 			$("#add_skill_log").html("Something went wrong. Try again please");
// 		}
//  	});
// }


// function removeSkill(id, row) {

// 	if(!id) {
// 		swal("Error", "Incomplete Param", "error");
// 		return false;
// 	}

// 	$.ajax({
// 		type: 'post',
// 		url: baseUrl + "/app/skill/remove",
// 		data: {"_token":_token,"id":id},
// 		success: function(response) {
// 			console.log(response);
// 			if(!response.error) {
// 				swal("Success", ""+ response.success, "success");
// 				document.getElementById("skill-list").deleteRow(row);
// 			}
// 			else {
// 				swal("Error", ""+ response.error, "error");	
// 			}
// 		},
// 		error: function(response) {
// 			swal("Error", "System Error. Please try again", "error");
// 		}
//  	});
// }



// function sendInvitation(name, email, id_selector) {
// 	 console.log("sendInvitation called");
// 	if(!name || !email) {
// 		swal("Ooops", "Name and Email is required", "error");
// 		return;
// 	}

// 	$.ajax({
// 		type: 'post',
// 		url: baseUrl + "/app/invitation/send",
// 		data: {"_token":_token,"invite_name":name,"invite_email":email},
// 		beforeSend: function() { displayWait(id_selector); },
// 		success: function(response) {
// 			cancelWait(id_selector);
// 			console.log(JSON.stringify(response));
// 			if(!response.error) {
// 				$("#invite_email, #invite_name").val("");
// 				swal({
// 							title: "Success!",
// 							text: "" + response.success,
// 							type: "success",
// 							confirmButtonClass: "btn-success"
// 					});	
// 			} else {
// 				swal("Ooops", ""+response.error, "error");
// 			}	
// 		},
// 		error: function(response) {
// 			cancelWait(id_selector);
// 			$("#invite_log").html("Something went wrong. Try again please");
// 		}
//  	});
// }


// function deleteInvitation(id, row_num, id_selector) {

// 	if(!id) {
// 		return;
// 	}

// 	$.ajax({
// 		type: 'post',
// 		url: baseUrl + "/invitation/delete",
// 		data: {"_token":_token,"id":id},
// 		beforeSend: function() { displayWait(id_selector); },
// 		success: function(response) {
// 			cancelWait(id_selector);
// 			if(!response.error) {
// 				swal({
// 							title: "Success!",
// 							text: "" + response.success,
// 							type: "success",
// 							confirmButtonClass: "btn-success"
// 					});	
// 				 document.getElementById(""+id_selector).deleteRow(row_num + 1); 
// 			} else {
// 				swal("Oops...", ""+response.error, "error");
// 			}	
// 		},
// 		error: function(response) {
// 			cancelWait(id_selector);
// 			swal("Oops...", "Something went wrong. Try again please", "error");
// 			// $("#invite_log").html();
// 		}
//  	});


// }



// function updateInvitation(id, expired, row_num, col, id_selector) {


// 	$.ajax({
// 		type: 'post',
// 		url: baseUrl + "/invitation",
// 		data: {"_token":_token,"id":id,"expired":expired},
// 		beforeSend: function() { displayWait(id_selector); },
// 		success: function(response) {
// 			cancelWait(id_selector);
// 			if(!response.error) {
// 				swal({
// 							title: "Success!",
// 							text: "" + response.success,
// 							type: "success",
// 							confirmButtonClass: "btn-success"
// 					});	
// 				 // document.getElementById(""+id_selector).rows[row_num + 1].cells[2].innerHTML = ((expired == true) ? true : false); 
// 				 	col.html(((expired == 1) ? "true" : "false"));
// 				 	col.attr("target",  expired);
// 			} else {
// 				swal("Oops...", ""+response.error, "error");
// 			}	
// 		},
// 		error: function(response) {
// 			cancelWait(id_selector);
// 			swal("Oops...", "Something went wrong. Try again please", "error");
// 		}
//  	});


// }


// function deleteProject(id, row, id_selector) {

// 	if(!id || !row) {
// 		swal("Error", "Incomplete Param", "error");
// 		return false;
// 	}

// 	$.ajax({
// 		type: 'post',
// 		url: baseUrl + "/app/project/delete",
// 		data: {"_token":_token,"id":id},
// 		beforeSend: displayWait(id_selector),
// 		success: function(response) {
// 			cancelWait(id_selector);
// 			if(!response.error) {
// 				swal("Success", ""+ response.success, "success");
// 				document.getElementById(id_selector).deleteRow(row);
// 			}
// 			else {
// 				swal("Error", ""+ response.error, "error");
// 			}
// 		},
// 		error: function() {
// 			cancelWait(id_selector);
// 			swal("Error", "System Error. Please try again", "error");
// 		}
// 	});
// }


// function user(id, row, id_selector, url) {

// 	if(!id || !row) {
// 		swal("Error", "Incomplete Param", "error");
// 		return false;
// 	}

// 	$.ajax({
// 		type: 'post',
// 		url: url,
// 		data: {"_token":_token,"id":id},
// 		beforeSend: displayWait(id_selector),
// 		success: function(response) {
// 			cancelWait(id_selector);
// 			if(!response.error) {
// 				swal("Success", ""+ response.success, "success");
// 				//document.getElementById(id_selector).deleteRow(row);
// 				window.location.reload();
// 			}
// 			else {
// 				swal("Error", ""+ response.error, "error");
// 			}
// 		},
// 		error: function() {
// 			cancelWait(id_selector);
// 			swal("Error", "System Error. Please try again", "error");
// 		}
// 	});
// }


function displayWait(id_selector) {

	$(id_selector).block({
					message: '<div class="blockui-default-message"><i class="fa fa-circle-o-notch fa-spin"></i><h6>Processing . . .</h6></div>',
					overlayCSS:  {
						background: 'rgba(142, 159, 167, 0.8)',
						opacity: 1,
						cursor: 'wait'
					},
					css: {
						width: '50%'
					},
					blockMsgClass: 'block-msg-default'
   });
}


function cancelWait(id_selector) {
  $(id_selector).unblock()
}