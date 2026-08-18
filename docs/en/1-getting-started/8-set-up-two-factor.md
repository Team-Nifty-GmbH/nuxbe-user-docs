# Setting Up Two-Factor Authentication

This page shows step by step how to activate two-factor authentication in Nuxbe. There are two routes:

- **Voluntarily in your profile:** you activate 2FA yourself because you want to protect your account.
- **Enforced by the administrator:** your tenant requires 2FA. You are then redirected to a selection page after your next login and return to the application only once the setup is complete.

The procedure itself is the same in both cases, only the entry point differs.

> **Note:** Before you start the TOTP setup, install an authenticator app on your phone or in your password manager. Recommendations are in [Two-Factor Authentication -- Basics](7-two-factor-basics.md#authenticator-apps----our-recommendation).

## Enforced Initial Setup

If your administrator made 2FA mandatory for you, it goes like this:

1. You sign in with mail and password as usual.
2. Instead of the dashboard you see the selection page below. It comes before any other action and you can leave it only by completing the setup.

<!-- Screenshot: enforced setup with the method selection -->

3. Choose one of the two cards: **Authenticator app** or **Passkey**. If you are unsure, the authenticator app is the more accessible route because it works on any device.
4. Follow the matching section below, [Setting Up TOTP](#setting-up-totp-with-an-authenticator-app) or [Setting Up a Passkey](#setting-up-a-passkey).
5. Once the setup succeeds you are taken to the dashboard automatically.

> **Note:** The **Back to sign-in** button at the bottom signs you out. You can sign in again, but with the requirement active you land on this page again. There is no way around registering one of the two methods.

## Voluntary Setup in Your Profile

If 2FA is not enforced for you, you can still activate it on your own initiative:

1. Click your user name at the top left of the sidebar, below **Signed in as:**.
2. Click **My profile**.
3. Scroll down to the **Two-factor authentication** section.

<!-- Screenshot: two-factor section in the profile with the Activate button -->

4. Follow the matching section below, either [Setting Up TOTP](#setting-up-totp-with-an-authenticator-app) or [Setting Up a Passkey](#setting-up-a-passkey). You can also set up both one after the other, which is what we recommend, see [Option A](7-two-factor-basics.md#which-method-should-i-choose).

## Setting Up TOTP with an Authenticator App

1. Click **Activate** in the 2FA section. The card expands and shows a QR code, an alphanumeric secret and an input field.

<!-- Screenshot: QR code and manual secret -->

2. Open your authenticator app on the phone, or in your password manager.
3. Choose **Add account** in the app, or whatever it is called there.
4. **Option A: scan the QR code.** Point the phone camera at the QR code. The app reads the secret automatically.
5. **Option B: enter the secret manually.** If the camera does not work, or you use 1Password or Bitwarden in the browser, copy the secret below the QR code into the matching field of your password manager.

   > **Note:** You see the secret only once, during setup. Treat it like a password. Never send it by mail or chat. Losing it is no drama, you can start the setup again; but anyone else who gets it can produce exactly the same codes as you.

6. The app now produces a six-digit code every 30 seconds. Read the **current** code and enter it in the **Verification code** field.

<!-- Screenshot: verification code entered in the input field -->

   > **Note:** If the code expires before you finish typing, wait a moment and use the next one. Most apps show a progress bar or countdown.

7. Click **Confirm**.
8. If the code was correct, the QR area closes and the green **Activated** badge appears at the top right of the card.

<!-- Screenshot: 2FA active with the Activated badge -->

From now on every new login asks for the six-digit code, see [Signing in with mail, password and TOTP code](9-signing-in-with-two-factor.md#signing-in-with-mail-password-and-totp-code).

> **Tip:** If you use 1Password or Bitwarden, add the TOTP secret **inside the password entry** for Nuxbe. The browser extensions then fill in the code for you at sign-in and you never type it.

## Setting Up a Passkey

To register a passkey in addition to, or instead of, the TOTP app:

1. In your profile scroll to the **Passkeys** section, directly below the 2FA section.
2. Enter a label for this passkey in the **Name** field. Choose something that identifies the device later, such as `MacBook Pro`, `iPhone private`, `YubiKey desk`.

<!-- Screenshot: passkey name entered in the field -->

   > **Note:** Only you see this name, in your list of passkeys. It does not affect security. It is useful once you have several passkeys and want to remove a particular one.

3. Click **Create**.

<!-- Screenshot: Create button highlighted -->

4. Your browser or operating system shows a system dialog. What it looks like depends on your device:

   - **Mac or MacBook with Touch ID:** a "Save passkey for ..." dialog, confirm with Touch ID.
   - **Windows with Windows Hello:** a dialog asking for camera or fingerprint.
   - **iPhone or iPad with Face ID:** confirmation by face recognition; the passkey goes into the iCloud keychain.
   - **Android with fingerprint:** confirmation at the sensor; the passkey goes into the Google password manager.
   - **YubiKey or another hardware key:** plug the key in and tap the button once it blinks.
   - **1Password or Bitwarden:** a browser extension asks whether to store the passkey in the vault.

5. Confirm the dialog. If everything worked, your new passkey appears in the list with the name you gave it and a **Last used** note.

<!-- Screenshot: registered passkey in the list -->

6. **Recommendation:** repeat the procedure with a second device or a second password manager vault. That gives you a backup passkey in case you lose the primary device.

> **Note:** If the **Create** button does nothing, or an error appears, check the [requirements for passkeys](7-two-factor-basics.md#requirements-for-passkeys). Older browsers and devices without a biometric sensor do not support passkeys.

## Done -- What Now?

- To sign in with the new configuration, read [Signing In with Two-Factor Authentication](9-signing-in-with-two-factor.md).
- To delete a passkey, add another one or deactivate TOTP, read [Managing Two-Factor Authentication](10-manage-two-factor.md).
- If you are worried about losing a device, read [What to Do If You Lose Access](10-manage-two-factor.md#what-to-do-if-you-lose-access).
