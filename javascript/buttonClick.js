function ajaxClickResponse() {
  let response = this.response; console.log('test');

  if (response.length > 11) return false; //error

  let digit_list = document.getElementsByClassName('screen_digit')
  for (let i = 0; i < response.length; i++) {
    digit_list[i].innerHTML = response.charAt(i);
  }
}

function test () {console.log('test');}
