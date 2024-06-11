const btn = document.querySelector('.btn');
const keyword = document.querySelector('.keyword');
const data = document.querySelector('.data');


// event ketika kita menuliskan keyword
keyword.addEventListener('keyup', function () {
  // ajak
  // xmlhttprequest
//   const xhr = new XMLHttpRequest();

//   xhr.onreadystatechange = function() {
//     if(xhr.readyState == 4 && xhr.status == 200) {
//       data.innerHTML = xhr.responseText;
//     }
//   };

//   xhr.open('get', '../ajax/ajax.php?keyword=' + keyword.value);
//   xhr.send();


fetch('../ajax/ajaxuser.php?keyword=' + keyword.value)
  .then((response) => response.text())
  .then((response) => (data.innerHTML = response));
 


});

