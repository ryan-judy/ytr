
//the formula: c =  (r * p) / (1 - (Math.pow((1 + r), (-n))));
//p is the amount borrowed
//r is a percentatee
//n is the term in years
function calculateMortgage(p, r, n){
  //convert this percentage into a decimal
  r = percentToDecimal(r);
  //convert years to months
  n = yearsToMonths(n);
 var pmt = (r * p) / (1 - (Math.pow((1 + r), (-n))));
  return parseFloat(pmt.toFixed(2));
}



function percentToDecimal(percent){
  return (percent/12)/100;
}



function yearsToMonths(year){
  return year * 12;
}

function postPayments(payment){
  var htmlEl = document.getElementById("outmonthly");
  htmlEl.innerText = "$" + payment;
}

var btn = document.getElementById("btncalculate");
btn.onclick = function(){
   var cost = document.getElementById("incost").value;
   var downPayment = document.getElementById("indown").value;
   var interest = document.getElementById("inapr").value;
   var term = document.getElementById("inperiod").value;
  
   var amountBorrowed = cost - downPayment;
  
   var pmt = calculateMortgage(amountBorrowed, interest, term);
   postPayments(pmt);
  
};