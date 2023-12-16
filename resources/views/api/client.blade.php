
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>api Test</title>
</head>
<body>
{{-- <p id="content">please wait, loading data...</p>
<h2 id="f0"></h2>
<h4 id="f1"></h4> --}}

<label>Enter the id:</label> 
        <input type = "text" id = "input_id"><br>
        <input type="button" onclick="getName()" value="Get Name">
        <p id="content">Please wait, loading data...</p>
        <h2 id="name"></h2>
<script>

    function getName(){
        n = document.getElementById("input_id").value;
        fetch('http://127.0.0.1:8000/api/api.php?id=' + n)
            .then(response => response.json())
            .then(myObj => {
                document.getElementById("content").innerHTML = "";
                document.getElementById("name").innerHTML = myObj.content[0].name;
            })
    }


    // let n = prompt('please enter the id:');
	// fetch('https://jsonplaceholder.typicode.com/todos/' + n)
	// 	.then(response => response.json())
	// 	.then(myObj => {
	// 		// document.getElementById("content").innerHTML = JSON.stringify(json);
	// 		document.getElementById("content").innerHTML = myObj.title;
	// 		// document.getElementById("title").innerHTML = myObj.title;
	// 		// document.getElementById("complete").innerHTML = myObj.completed;
	// 	})








    // let n = 5;
	// var xmlhttp = new XMLHttpRequest();
	// xmlhttp.onreadystatechange = function() {
	// 	if (this.readyState == 4 && this.status == 200) {
	// 		var myObj = JSON.parse(this.responseText);
			
    //         // sleep
    //         setTimeout(1000);
	// 		document.getElementById("content").innerHTML = myObj.title;
	// 		// document.getElementById("content").innerHTML = "";
    //         // document.getElementById("complete").innerHTML = myObj.completed;
	// 	}
	// };
	// xmlhttp.open("GET","https://jsonplaceholder.typicode.com/todos/" + n, true);

	// xmlhttp.send();






    // converting js to json (js object)
    // let obj = {'name': 'Tom', 'age': 20};
    // turning the object into string
    // let s = JSON.stringify(obj);
    // console.log(s);


    // replacing the paragraph id="content" with the obj vars
    // document.getElementById("content").innerHTML = s;

    // converting json to js (json object)
    // let obj2 = JSON.parse(s);
    // document.getElementById("content").innerHTML = obj2.name + " ---> " + obj2.age;

    // let list1 = [
    //     {'name': 'Tom', 'age': 20},
    //     {'name': 'Maria', 'age': 20}
    // ];
    // document.getElementById("content").innerHTML = JSON.stringify(list1);

    // console.log(JSON.stringify(list1));
    
</script>
    
</body>
</html>