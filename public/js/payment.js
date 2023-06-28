const API = 'ZXlKMGVYQWlPaUpLVjFRaUxDSmhiR2NpT2lKSVV6VXhNaUo5LmV5SmpiR0Z6Y3lJNklrMWxjbU5vWVc1MElpd2ljSEp2Wm1sc1pWOXdheUk2TnpFeE5USTJMQ0p1WVcxbElqb2lhVzVwZEdsaGJDSjkuTDIxaDg2MWl4SmhEdVlBcWtkMDhfeTZYbWIxcFVIR3hXVzJFM2N1ekNUaTNvMC1sWm9Mam5MMjZvZDJPZjFLNEhwa2t4TV9GMFo3NUFtNER6LWliRlE=';
async function firstStep() {
    let data = {
        "api_key": API
    }
    let request = await fetch('https://accept.paymob.com/api/auth/tokens', {
        method: 'post',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data)
    })

    let response = await request.json()

    let token = response.token

    secondStep(token)

}
async function secondStep(token) {
    let data = {
        "auth_token": token,
        "delivery_needed": "false",
        "amount_cents": "100",
        "currency": "EGP",
        "items": [],
    }

    let request = await fetch('https://accept.paymob.com/api/ecommerce/orders', {
        method: 'post',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data)
    })

    let response = await request.json()

    let id = response.id

    thirdStep(token, id)
}
async function thirdStep(token, id) {
    let data = {
        "auth_token": token,
        "amount_cents": "100",
        "expiration": 3600,
        "order_id": id,
        "billing_data": {
            "apartment": "803",
            "email": "claudette09@exa.com",
            "floor": "42",
            "first_name": "Clifford",
            "street": "Ethan Land",
            "building": "8028",
            "phone_number": "+86(8)9135210487",
            "shipping_method": "PKG",
            "postal_code": "01898",
            "city": "Jaskolskiburgh",
            "country": "CR",
            "last_name": "Nicolas",
            "state": "Utah"
        },
        "currency": "EGP",
        "integration_id": 3501395
    }

    let request = await fetch('https://accept.paymob.com/api/acceptance/payment_keys', {
        method: 'post',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data)
    })
    let response = await request.json()
    let TheToken = response.token
    cardPayment(TheToken)
}
async function cardPayment(token) {
    let iframURL = `https://accept.paymob.com/api/acceptance/iframes/738261?payment_token=${token}`
    location.href = iframURL
}
