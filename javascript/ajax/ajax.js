function ajax(data, callFunction, that = null) {console.log('ajax');
  // (B) AJAX
  let xhr = new XMLHttpRequest();
  xhr.open("POST", 'action/ajaxRequest.php');
  xhr.that = that;

  // What to do when server responds
  xhr.onload = callFunction;
  xhr.send(data);

  return xhr;
}


function request(requestName) {console.log('request');
  let data = new FormData();

  data.append("request", requestName);

  return data;
}
