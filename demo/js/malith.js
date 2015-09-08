var checkDisplay = function(check1, form) { //check ID, form ID
			form = document.getElementById(form), check1 = document.getElementById(check1);
			check.onclick = function(){
				form.style.display = (this.checked) ? "block" : "none";
				form.reset();
			};
			check.onclick();
		};
		