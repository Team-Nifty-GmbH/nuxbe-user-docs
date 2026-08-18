# Managing Two-Factor Authentication

This page covers everything you can change after the initial setup: adding another passkey, deleting an old one, deactivating the authenticator app, and what to do if you lost the device.

## Seeing the Status in Your Profile

All 2FA settings live on your profile page:

1. Click your user name at the top left of the sidebar, below **Signed in as:**.
2. Click **My profile**.
3. Scroll down to the **Two-factor authentication** and **Passkeys** sections.

<!-- Screenshot: active 2FA status in the profile with the passkey list -->

At the top right of the 2FA section you see a status badge:

- **Activated** (green) -- the authenticator app is set up.
- **Deactivated** (grey) -- no authenticator app is set up.

The passkey section below lists every passkey you registered for this account, each with its name and the date it was last used.

## Adding Another Passkey

Several passkeys are not redundant, they are **insurance**. With one passkey per device you can still sign in when a device is lost.

For the procedure see [Setting Up a Passkey](8-set-up-two-factor.md#setting-up-a-passkey). You can repeat it as often as you like; every click on **Create** adds another passkey to the list.

> **Recommendation:** keep at least **two passkeys**, one on the work laptop and one in a cloud password manager (1Password, Apple Passwords, Bitwarden). That keeps you signed in when the laptop fails.

## Deleting a Passkey

When you hand a device over, dispose of a laptop, or stop using a passkey:

1. Go to **My profile** and scroll to the **Passkeys** section.
2. Find the entry in the list by the name you gave it.
3. Click the red **Delete** button on the right.

<!-- Screenshot: Delete button next to a passkey entry -->

4. The passkey disappears from the list immediately. The next login attempt from that device fails, and you have to use another passkey or mail, password and TOTP.

> **Note:** Deleting removes the passkey **at Nuxbe** only. On the device or in the password manager the record often stays visible, it simply no longer works for signing in to Nuxbe. To tidy up locally as well, delete the entry in the password settings of your browser or vault too.

## Deactivating the Authenticator App (TOTP)

If 2FA is **not enforced** for you, you can switch the authenticator app off again at any time:

1. Go to **My profile** and scroll to the **Two-factor authentication** section.
2. Click the red **Disable** button.

<!-- Screenshot: Disable button in the 2FA section -->

3. The secret is deleted on the server. The status badge switches to **Deactivated** and no code is asked for at the next login.

The app on your phone knows nothing about this and keeps showing codes for the secret that is no longer in use. You can remove the entry in the app.

> **Note:** To **set 2FA up afresh**, because you changed authenticator apps for example, deactivate first and then set it up as usual. The new secret has nothing to do with the old one.

> **Careful:** If your administrator made 2FA mandatory for you, the **Disable** button is hidden or locked. You then have to keep 2FA active, or ask the administrator to release you from the requirement.

## Setting the Authenticator App Up Again

Changing apps? New phone? Here is how:

1. If you still have access to the old app: deactivate as described above, then run the setup again with the new app, see [Setting Up TOTP](8-set-up-two-factor.md#setting-up-totp-with-an-authenticator-app).
2. If you no longer have access to the old app: read [What to Do If You Lose Access](#what-to-do-if-you-lose-access) below.

## What to Do If You Lose Access

There is **no self-service recovery code** in Nuxbe. If you lost your second factor, you depend on your administrator.

### What You Cannot Fix Yourself

- You cannot get into your account because the phone is gone and no passkey was registered.
- The authenticator app is deleted and there is no backup in a cloud vault.
- The only passkey sits on a device that no longer works, and there is no second one.

### What You Do

1. **Contact your administrator** by phone, chat, or through a colleague who can report it to IT for you. Do **not** send the request from the mail address you sign in with, if you cannot reach that mailbox any more anyway.
2. Explain what happened (phone lost, phone reset, passkey device broken). The administrator resets your second factor, see [Security Settings](../14-settings/57-security-settings.md#resetting-a-users-two-factor) for the admin view.
3. After the reset you can sign in with mail and password again, without a second factor.
4. If 2FA is mandatory for you, the next login takes you straight to the enforced initial setup, see [Enforced Initial Setup](8-set-up-two-factor.md#enforced-initial-setup). Set 2FA up again, ideally with a backup passkey this time.

### Preventing It Next Time

- Keep **at least two passkeys**: one on the main device, one in a cloud password manager.
- Use an **authenticator app with cloud backup**. 1Password, Bitwarden, Authy, Apple Passwords and Google Authenticator (the last one has to be switched on) carry the secret to a new device automatically.
- Use a **password manager that synchronises across devices**, so the vault with TOTP secrets and passkeys does not live on one device alone.
- If you work with a **hardware key** (YubiKey, SoloKey): register two, and keep one in a safe place.

## What Next?

- To set 2FA up from scratch, after a reset by the administrator for example, go back to [Setting Up Two-Factor Authentication](8-set-up-two-factor.md).
- To read up on the daily sign-in again, see [Signing In with Two-Factor Authentication](9-signing-in-with-two-factor.md).
- Administrators find the global 2FA switches and the reset tool for other users in [Security Settings](../14-settings/57-security-settings.md).
