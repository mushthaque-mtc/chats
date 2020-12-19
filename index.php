<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>JSON Test</title>
  </head>
  <body>
    <div  id="myData">sss</div>
    <script>
      fetch('people.json')
        .then(function (response) {
          return response.json();
        })
        .then(function (data) {
          appendData(data);
        })
        .catch(function (err) {
          console.log('error: ' + err);
        });
      function appendData(data) {
        console.log(data);
        var mainContainer = document.getElementById('myData');
        for (var i = 0; i <= data.length; i++) {
          var div = document.createElement('div');
          div.innerHTML = '<br> <div class="container">  <p>  ' + data[i].content;
// console.log(data[i].content);
  //          for(var j = 0; j <data[0].messages.length;j++){
  //  div.innerHTML = ' </p> <br>'+  '<p > message 0: ' +data[i].messages[j].content ;
    // if(data[i] . transcript[j].id =="") {
    //    div.innerHTML += '</p> <br> '+'<p class="right"> message 1 : '+data[i] . transcript[j] . message+'</p> </div>';

    // }


          //  }

          mainContainer.appendChild(div);
        }
      }
    </script>
  </body>
  <style>
  .container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

/* Darker chat container */
.darker {
  border-color: #ccc;
  background-color: #ddd;
}

/* Clear floats */
.container::after {
  content: "";
  clear: both;
  display: table;
}

/* Style images */
.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

/* Style the right image */
.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

/* Style time text */
.time-right {
  float: right;
  color: #aaa;
}

/* Style time text */
.time-left {
  float: left;
  color: #999;
}
.right{
  float:right;


}
  </style>
</html>
