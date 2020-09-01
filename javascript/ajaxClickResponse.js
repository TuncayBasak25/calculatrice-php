function ajaxClickResponse() {
  let response = this.response;

  if (response.length > 12) {
    document.body.innerHTML = response;
    return false; //error
  }

  let digit_list = document.getElementsByClassName('screen_digit');

  for (let i = 0; i < response.length; i++) {
    let digit = response.charAt(i);

    let top_case = digit_list[i].firstElementChild;
    let bot_case = top_case.nextElementSibling;

    top_case.style.borderLeft = 'none';
    top_case.style.borderRight = 'none';
    top_case.style.borderTop = 'none';
    top_case.style.borderBottom = 'none';

    bot_case.style.borderLeft = 'none';
    bot_case.style.borderRight = 'none';
    bot_case.style.borderTop = 'none';
    bot_case.style.borderBottom = 'none';

    if (digit === '0') {
      borderLeft(top_case);
      borderTop(top_case);
      borderRight(top_case);

      borderLeft(bot_case);
      borderRight(bot_case);
      borderBottom(bot_case);
    }
    else if (digit === '1') {
      borderLeft(top_case);

      borderLeft(bot_case);
    }
    else if (digit === '2') {
      borderTop(top_case);
      borderRight(top_case);
      borderBottom(top_case);

      borderLeft(bot_case);
      borderBottom(bot_case);
    }
    else if (digit === '3') {
      borderTop(top_case);
      borderRight(top_case);
      borderBottom(top_case);

      borderRight(bot_case);
      borderBottom(bot_case);
    }
    else if (digit === '4') {
      borderLeft(top_case);
      borderRight(top_case);
      borderBottom(top_case);

      borderRight(bot_case);
    }
    else if (digit === '5') {
      borderLeft(top_case);
      borderTop(top_case);
      borderBottom(top_case);

      borderRight(bot_case);
      borderBottom(bot_case);
    }
    else if (digit === '6') {
      borderLeft(top_case);
      borderTop(top_case);
      borderBottom(top_case);

      borderLeft(bot_case);
      borderRight(bot_case);
      borderBottom(bot_case);
    }
    else if (digit === '7') {
      borderTop(top_case);
      borderRight(top_case);

      borderRight(bot_case);
    }
    else if (digit === '8') {
      borderLeft(top_case);
      borderTop(top_case);
      borderRight(top_case);
      borderBottom(top_case);

      borderLeft(bot_case);
      borderRight(bot_case);
      borderBottom(bot_case);
    }
    else if (digit === '9') {
      borderLeft(top_case);
      borderTop(top_case);
      borderRight(top_case);
      borderBottom(top_case);

      borderRight(bot_case);
      borderBottom(bot_case);
    }
    else if (digit === '.') {
      bot_case.style.borderBottom = "3px solid red";
    }
  }
}


function borderLeft(context) {
  context.style.borderLeft = "3px solid black";
}
function borderTop(context) {
  context.style.borderTop = "3px solid black";
}
function borderRight(context) {
  context.style.borderRight = "3px solid black";
}
function borderBottom(context) {
  context.style.borderBottom = "3px solid black";
}
