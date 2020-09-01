window.addEventListener('keydown', keydown);

function keydown(e) {
  let key = e.which;

  if (key > 96 && key < 105) {
    let num = String(key - 96);

    ajax(request(num), ajaxClickResponse);
  }
  else if (key === 110) {
    ajax(request('.'), ajaxClickResponse);
  }
  else if (key === 107) {
    ajax(request('+'), ajaxClickResponse);
  }
  else if (key === 109) {
    ajax(request('-'), ajaxClickResponse);
  }
  else if (key === 106) {
    ajax(request('*'), ajaxClickResponse);
  }
  else if (key === 111) {
    ajax(request('/'), ajaxClickResponse);
  }
  else if (key === 13) {
    ajax(request('='), ajaxClickResponse);
  }
  else if (key === 46) {
    ajax(request('Clear'), ajaxClickResponse);
  }
  else if (key === 222) {
    ajax(request('x²'), ajaxClickResponse);
  }
}
