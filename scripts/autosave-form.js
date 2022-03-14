"use strict";

let AutoSave = ((function () {

	/** Save Timer */
	var timer = null;
	/** id of the form */
	var formID;

	/**
	 * 
	 * @returns HTMLElement for the form
	 */
	function getForm() {
		var form = document.getElementById(formID);
		return form;
	}

	/**
	 * save the current content of the form to local storage
	 */
	function save() {
		console.log("saving");

		var form = getForm();
		var formData = new FormData(form);
		var Data = JSON.stringify(Object.fromEntries(formData));

		localStorage.setItem("AUTOSAVE_" + document.location, Data);
		console.log("saved");
	}

	/**
	 * restore the local storage to form content
	 */
	function restore() {
		console.log("restoring");

		var storedData = localStorage.getItem("AUTOSAVE_" + document.location);

		if (storedData) {
			try {
			var Data = JSON.parse(storedData);
			Object.keys(Data).forEach((k) => {
				console.log(`restore ${k}`);
				document.getElementById(k).value = Data[k];
			});
			console.log("restored");
			} catch(e) {
				console.error(e);
			}
		}
	}

	/** bootstrap  */
	return {

		start: function (id) {

			formID = id;
			restore();

			if (timer != null) {
				clearInterval(timer);
				timer = null;
			}

			timer = setInterval(save, 5000);

		},

		stop: function () {

			if (timer) {
				clearInterval(timer);
				timer = null;
			}

		}
	}

})());

window.addEventListener("DOMContentLoaded", startTimer());

function startTimer() {
	AutoSave.start("mainForm");
}