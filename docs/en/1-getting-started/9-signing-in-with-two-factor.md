# Signing In with Two-Factor Authentication

Once you have [set up two-factor authentication](8-set-up-two-factor.md), the login changes. This page shows how signing in works now, for both methods.

## Signing in with mail, password and TOTP code

If you set up an authenticator app, with or without an additional passkey, the classic login goes like this:

1. Open the Nuxbe sign-in page.

<!-- Screenshot: sign-in form with example email and password -->

2. Enter your **email address** and your **password**, exactly as before.
3. Click **Sign in**.
4. Instead of landing in the dashboard you now see a second page asking for **two-factor authentication**:

<!-- Screenshot: TOTP input after the password was accepted -->

5. Open your authenticator app and read the **current** six-digit code for Nuxbe.
6. Type the code into the input field. If you use a password manager such as 1Password or Apple Passwords with the TOTP stored, the code is filled in for you: the fields are marked as `one-time-code`, so password managers and phone keyboards offer it.
7. Click **Confirm**, or press **Enter**.

If the code is right you are signed in and taken to the dashboard, or to the page you originally wanted.

> **Note:** TOTP codes are valid for 30 seconds. If you are too slow, or the code changes while you type, simply enter the next one. No codes get "used up" in a way that would block you.

### Common Problems with the TOTP Input

- **"Wrong code" although you typed it correctly:** check the clock on your phone. TOTP works only if phone and server are in sync. Usually it is enough for the phone to be online and set the time automatically. A few seconds of drift are fine, several minutes are not.
- **Code expired:** wait for the app to show the next one and enter that.
- **No app at hand:** click **Cancel**. You return to the sign-in page and can start over once you have the app.

## Signing In with a Passkey

If you registered a passkey for this device, the login is much faster:

1. Open the Nuxbe sign-in page.
2. Below the **Or** divider, click **Authenticate using passkey**.

<!-- Screenshot: sign-in form with the passkey button highlighted -->

3. Your browser or operating system shows a system dialog, depending on where the passkey is stored:

   - **Mac with Touch ID:** confirm with your fingerprint.
   - **Windows with Hello:** confirm with face, fingerprint or PIN.
   - **iPhone or iPad:** Face ID or Touch ID.
   - **Android:** fingerprint or device PIN.
   - **YubiKey or hardware key:** plug the key in and press the button.
   - **1Password or Bitwarden:** unlock the vault and pick the passkey.

4. As soon as you confirm, you are signed in, without entering mail or password.

> **Note:** The passkey is first and second factor in one. You are **not** asked for a TOTP code afterwards; the biometric or device-bound confirmation already is the second factor.

### When the Passkey Button Does Not Appear

If you do not see **Authenticate using passkey** on the sign-in page, your current browser has no passkey support. Possible reasons:

- You use a very old browser or a restricted environment, a browser on a kiosk system for example.
- Private or incognito mode blocks access to the passkey vault in some browsers.
- The connection runs over `http://` instead of `https://`. Passkeys need a secure connection.

In that case sign in with mail, password and TOTP code. Back on a supported device, the passkey login works again.

## Switching Between the Methods

With both a TOTP code and a passkey set up, you choose freely at every login:

- **Fast and convenient on your main device:** click **Authenticate using passkey**.
- **From someone else's computer without a passkey:** use mail, password and the six-digit code from the app.

Both routes lead to the same account.

## What Next?

- Trouble with codes or a passkey? Read [Managing Two-Factor Authentication](10-manage-two-factor.md), which covers replacing and deleting methods.
- Lost your second factor? Jump straight to [What to Do If You Lose Access](10-manage-two-factor.md#what-to-do-if-you-lose-access).
