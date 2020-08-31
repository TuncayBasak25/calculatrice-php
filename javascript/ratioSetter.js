function ratioSetter()
{
  let ratio_calc_element_list = document.getElementsByClassName('ratio_calc');
  let ratio_calc;
  for (let i=0; i<ratio_calc_element_list.length; i++) {
    if (i === 0) ratio_calc = String(ratio_calc_element_list[i].getBoundingClientRect().width * 2);
    console.log(ratio_calc);
    ratio_calc_element_list[i].style.height = ratio_calc + "px";
  }
}

ratioSetter();
