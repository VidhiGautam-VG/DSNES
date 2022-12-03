const search_value = () =>{
		let filter = document.getElementById('searched').value.toUpperCase();

		let records = document.getElementById('records');

		let tr = records.getElementsByTagName('tr');

		for(var i=1; i<tr.length; i++){
			let td1 = tr[i].getElementsByTagName('td')[4];
			
			if (td1) {
				let text1 = td1.textContent || td1.innerHTML;

				if(text1.toUpperCase().indexOf(filter) > -1){
					tr[i].style.display = "";
				}else{
				tr[i].style.display = "none";
				}
			}
		}
	}