const form = document.querySelector('#lp_form')

// form.addEventListener('keydown', preventSubmit)

// prevent default on enter key!!!!
window.addEventListener('keydown', preventSubmit)
function preventSubmit(e) {
    console.log(e.keyCode);
}


const button = document.querySelectorAll('.btn')
button.forEach(btn => btn.addEventListener('click', handleClick))

function handleClick(e) {
    e.preventDefault()
    e.stopPropagation()

    const formElement = e.target.parentElement.parentElement
    const nextFormElement = formElement.nextElementSibling
    const field = formElement.dataset.field
    const formValue = e.target.dataset.value;
	console.log({field}, {formValue})
    const input = document.querySelector(`[name=${field}]`)
		console.log(input)

    // set the value to be submitted
    input.value = formValue
    // show next, hide current 
    formElement.style.display = 'none';
    nextFormElement.style.display = 'block'
}


function testFunction(e) {
    console.log(e);
    e.preventDefault()
    e.stopPropagation()

    document.querySelector('#lp_form')


}
window.addEventListener('click', testFunction)
window.addEventListener('touch', testFunction)


const testBtn = document.querySelector('.test')

const backBtn = document.querySelectorAll('.gold-btn')
backBtn.forEach(btn => btn.addEventListener('click', goBack))

function goBack(e) {
    const formElement = e.target.parentElement.parentElement
    const prevElement = formElement.previousElementSibling;
    formElement.style.display = 'none'
    prevElement.style.display = 'block'
  
    e.preventDefault()

}



function progress(e) {
    const progressBar = document.querySelectorAll('.form-progress-indicator ')
    let current = 0;
for (let i = 0; i < progressBar.length; i++) {
    if (progressBar[i].classList.contains('active')) {
        current = i + 1
    } 
}
console.log(current);
    const progress = e.target.classList[1]
    switch (progress) {
        case 'two':
            progressBack(1, 'two', 7.69)
            break;
        case 'three':
             progressBack(2, 'three', 15.38)
             break;
       case 'four':
            progressBack(3, 'four', 22)
            break;
        case 'five':
            progressBack(4, 'five', 28.5)
              break;
        case 'six':
            progressBack(5, 'six', 36)
           break;
        case 'seven':
            progressBack(6, 'seven', 43)
              break;
      case 'eight':
             progressBack(7, 'eight', 50)
             break;
        case 'nine':
             progressBack(8, 'nine', 58)
             break;
       case 'ten':
          progressBack(9, 'ten', 65)
          break;
        case 'eleven':
            progressBack(10, 'eleven', 72)
              break;
         case 'twelve':
             progressBack(11, 'twelve', 79)
             break;
         case 'thirteen':
            progressBack(12, 'thirteen', 87)
             break;
        default:
            break;
    }

}

const endPoint = "https://chlend.linktrustleadgen.com/Lead/432598/SimplePost";


const data = { "AFID" : "PUT_AFFILIATE_ID_HERE", "SID" : "PUT_SUB_ID_HERE", "ADID" : "PUT_AD_ID_HERE", "ClickID" : "PUT_CLICK_ID_HERE", "AffiliateReferenceID" : "PUT_AFFILIATE_REFERENCE_ID_HERE", "IPAddress" : "PUT_IP_ADDRESS_HERE", "first_name" : "PUT_FIRST_NAME_HERE", "last_name" : "PUT_LAST_NAME_HERE", "address" : "PUT_ADDRESS_HERE", "city" : "PUT_CITY_HERE", "state" : "PUT_STATE_HERE", "zip_code" : "PUT_ZIP_CODE_HERE", "email_address" : "PUT_EMAIL_ADDRESS_HERE", "phone_home" : "PUT_PHONE_HOME_HERE", "phone_work" : "PUT_WORK_PHONE_HERE", "phone_cell" : "PUT_CELL_PHONE_HERE", "best_time" : "PUT_BEST_TIME_TO_CALL_HERE", "country" : "PUT_COUNTRY_HERE", "opt_in" : "PUT_OPT_IN_HERE", "SR_TOKEN" : "PUT_SR_TOKEN_HERE", "TCPA_LANGUAGE" : "PUT_TCPA_LANGUAGE_HERE", "PRODUCT" : "PUT_PRODUCT_HERE", "EST_VAL" : "PUT_EST_VAL_HERE", "BAL_ONE" : "PUT_BAL_ONE_HERE", "LOAN_TYPE" : "PUT_LOAN_TYPE_HERE", "PROP_DESC" : "PUT_PROP_DESC_HERE", "VA_STATUS" : "PUT_VA_STATUS_HERE", "CRED_GRADE" : "PUT_CRED_GRADE_HERE", "FHA_BANK_FORECLOSURE" : "PUT_FHA_BANK_FORECLOSURE_HERE", "BANKRUPTCY" : "PUT_BANKRUPTCY_HERE", "NUM_MORTGAGE_LATES" : "PUT_NUM_MORTGAGE_LATES_HERE", "ANNUAL_VERIFIABLE_INCOME" : "PUT_ANNUAL_VERIFIABLE_INCOME_HERE", "SR_URL" : "PUT_SR_URL_HERE", "ADD_CASH" : "PUT_ADD_CASH_HERE", "BUY_TIMEFRAME" : "PUT_BUY_TIMEFRAME_HERE", "SPEC_HOME" : "PUT_SPEC_HOME_HERE", "PROP_ZIP" : "PUT_PROP_ZIP_HERE", "DOWN_PMT" : "PUT_DOWN_PMT_HERE", "PROP_ST" : "PUT_PROP_ST_HERE", "time_zone" : "PUT_TIME_ZONE_HERE", "dob" : "PUT_DOB_HERE", "employment_type" : "PUT_EMPLOYMENT_TYPE_HERE", "income_amount" : "PUT_INCOME_AMOUNT_HERE", "interest_rate_one" : "PUT_INTEREST_RATE_ONE_HERE", "interest_rate_two" : "PUT_INTEREST_RATE_TWO_HERE", "bal_two" : "PUT_BAL_TWO_HERE" }

data.first_name = 'test'
console.log(data);

function runPost() {
    fetch(endPoint, {
        method: "POST",
        body: JSON.stringify(data),
        headers: {"Content-type": "application/json; charset=UTF-8"}
      })
      .then(response => response.json()) 
      .then(json => console.log(json))
      .catch(err => console.log(err));
}

// runPost()