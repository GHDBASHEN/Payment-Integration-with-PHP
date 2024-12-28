# Payment Integration with Stripe using PHP

This project demonstrates how to integrate Stripe Checkout into a PHP application for processing payments.


## Features
- Create a Stripe Checkout session for a single product.
- Redirect users to a secure Stripe-hosted payment page.
- Handle success and cancellation URLs.

## Prerequisites

1. **Web Server:** Install and configure a web server like WAMP, XAMPP, or LAMP.
2. **Composer:** Ensure Composer is installed globally.
3. **Stripe Account:** Create a [Stripe](https://stripe.com/) account and obtain your API keys.

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/payment-integration-php.git
   cd payment-integration-php
   ```

2. Install dependencies:
   ```bash
   composer require stripe/stripe-php
   ```

3. Set up your environment:
   - Open the `checkout.php` file.
   - Replace the placeholder secret key with your Stripe secret key:
     ```php
     $stripe_secret_key = "your_stripe_secret_key";
     \Stripe\Stripe::setApiKey($stripe_secret_key);
     ```

4. Start your web server and navigate to the project directory in your browser.

## Usage
<video controls src="Nike Zoom KD 12 and 1 more page - Personal - Microsoft​ Edge 2024-12-28 23-06-11.mp4" title="Title"></video>

1. Access the application in your browser:
   ```
   http://localhost/payment-integration-php/checkout.php
   ```

2. The script will redirect you to Stripe's checkout page for payment.

3. Test the integration using Stripe's test card numbers (e.g., `4242 4242 4242 4242`).

## File Structure

```
.
├── checkout.php        # Main file for Stripe integration
├── composer.json       # Composer configuration file
├── vendor/             # Auto-generated directory for dependencies
```

## Stripe Test Cards
Use the following test card details to simulate payments:
- **Card Number:** 4242 4242 4242 4242
- **Expiry Date:** Any future date
- **CVC:** Any 3 digits

For more test cases, refer to [Stripe Test Cards](https://stripe.com/docs/testing).

## Security Notes
- Do not expose your secret API key in client-side code or version control.
- Use environment variables to securely store your keys.

## License
This project is licensed under the MIT License. See the `LICENSE` file for details.
