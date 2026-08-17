# Two-Factor Authentication -- Basics

Two-factor authentication (**2FA**) is a second security step when signing in. Even if somebody knows your password, they cannot get into your account without the second factor.

This page explains **what 2FA is**, **which two methods** Nuxbe supports and **what to prepare** before you start. To set it up right away, jump to [Setting Up Two-Factor Authentication](8-set-up-two-factor.md).

## What Is Two-Factor Authentication?

In a normal sign-in you provide exactly **one** proof that it is you: your password. Whoever knows that password gets straight into your account, whether because you told someone, because it leaked at another service, or because it is easy to guess.

2FA adds a **second factor** that an attacker cannot have:

- **something only you know** (your password)
- **something only you own** (your phone, your security key, your device)
- **something only you are** (fingerprint, face recognition)

Even with a compromised password, the attacker lacks the second factor and stays out.

## Why Is 2FA Mandatory in Some Cases?

Your administrator can make 2FA mandatory for everyone or for individual people. In that case you are guided through the setup automatically at your next login and reach your workspace only afterwards. See [Enforced Initial Setup](8-set-up-two-factor.md#enforced-initial-setup).

Even where 2FA is **optional** in your tenant, we recommend registering a second factor, especially if you work with accounting, bank data, customer data or DATEV exports.

## Which Methods Are There?

Nuxbe offers two procedures. You can set up one or both.

<!-- Screenshot: method selection with authenticator app and passkey side by side -->

### Authenticator App (TOTP)

You install an authenticator app on your phone, or in your password manager. The app produces a six-digit code that expires after 30 seconds. At sign-in you enter the current code from the app in addition to your password.

**Advantages:**

- Works with any device and any browser, no special hardware.
- Available without an internet connection, the codes are calculated offline.
- You can use the same app for other services.

**Disadvantages:**

- You have to type the six-digit code every time, or have your password manager fill it in.
- If you lose the phone and have no backup app, access is gone and the administrator has to reset it.

**Behind the scenes:** TOTP stands for *time-based one-time password*. Both the app and the server know a shared secret; from that secret and the current time both calculate the same six-digit code. That is why the clocks of phone and server need to be reasonably in sync.

### Passkey (WebAuthn)

Your device (Mac, Windows, phone, security key) stores a cryptographic key unlocked by Touch ID, Face ID, Windows Hello, the device PIN or a hardware key. At sign-in you click **Authenticate using passkey**, confirm with your fingerprint or face, and you are in. No password, no code.

**Advantages:**

- Very fast and convenient, one tap is enough.
- Phishing-resistant: a passkey works only on the genuine Nuxbe domain. Someone clicking a phishing link cannot misuse it.
- No password needed, the passkey replaces both password and six-digit code.

**Disadvantages:**

- Works only on modern devices and browsers, see [Requirements for Passkeys](#requirements-for-passkeys).
- Tied to a specific device or password manager. To sign in from someone else's computer you need either a passkey mirrored in a cloud password manager, or one passkey per device.
- If the device is lost and no second passkey is in the vault, the administrator is involved again.

## Which Method Should I Choose?

Both work. If you are unsure:

- **Option A: set up both.** Activate an authenticator app *and* register one or more passkeys. Day to day you use the fast passkey login. When you have to work from a colleague's tablet or get a new laptop, the authenticator app carries you.
- **Option B: authenticator app only.** If you often sign in from changing devices and do not use a synchronised password manager.
- **Option C: passkey only.** If you always work at the same Mac, PC or phone, already use a password manager with passkey synchronisation, and want maximum convenience.

## Authenticator Apps -- Our Recommendation

Many apps can produce TOTP codes. These are widely used and work reliably with Nuxbe:

- **1Password** (paid) -- stores TOTP right next to the password. At sign-in mail, password and code are filled in automatically.
- **Bitwarden** (free / premium) -- similar scope; premium stores TOTP codes.
- **Apple Passwords** (built into iPhone, iPad, Mac, free) -- TOTP is backed up in the iCloud keychain automatically.
- **Google Authenticator** (free, Android/iOS) -- the classic, with cloud backup.
- **Microsoft Authenticator** (free, Android/iOS) -- good if you work in the Microsoft ecosystem anyway.
- **Authy** (free, Android/iOS/desktop) -- mirrors the same code vault across several devices.
- **Aegis Authenticator** (free, Android, open source) -- for users who prefer their data encrypted locally.

> **Note:** Which app you choose is a matter of taste. Only one thing matters: **make sure you have a backup.** If your phone breaks, the TOTP secret must not disappear with it. Apps like 1Password, Bitwarden, Authy or Apple Passwords synchronise their vault to the cloud. With Google Authenticator you have to switch cloud backup on yourself.

## Password Manager as TOTP Storage -- Pros and Cons

Many password managers (1Password, Bitwarden, Apple Passwords, Dashlane and others) can store TOTP codes and fill them in at sign-in. That is very convenient, with one caveat.

**Advantage:** no switching between browser and phone. Mail, password and code are entered with one click.

**Disadvantage, be aware and then decide:** storing password and TOTP code in the same vault effectively melts the "two factors" into **one** -- the master password of that vault. Whoever cracks the vault has both. That is still much better than a password alone, but no longer as robust as a genuinely separate second factor.

**Recommendation for most users:** TOTP in the password manager is fine. But protect the vault with a strong master password and its own second factor (Touch ID, Face ID, Windows Hello). Then your TOTP codes are well protected again.

**Recommendation for particularly sensitive accounts:** do not store TOTP in the same vault as the password. Use a separate authenticator app on a second device, so the second factor stays genuinely separate from the first.

## Requirements for Passkeys

For passkeys to work you need:

- **A modern browser** -- current versions of Chrome, Edge, Firefox, Safari or Brave. Very old browsers do not support WebAuthn.
- **An authenticator** -- one of the following:
  - A modern phone or tablet with a fingerprint or face sensor (iPhone with Face ID or Touch ID, Android with fingerprint).
  - A Mac with Touch ID or Apple Watch confirmation.
  - A Windows PC with a Windows Hello camera, fingerprint sensor or PIN.
  - A hardware security key (YubiKey, SoloKey, Google Titan and similar).
  - A password manager with passkey support (1Password, Bitwarden, Apple Passwords, Google Password Manager).

If your browser has no passkey support, Nuxbe does not show the **Authenticate using passkey** button on the sign-in page at all. You then sign in with mail and password plus authenticator app.

## What If I Lose Access?

If you lose your phone, reset your laptop or delete a passkey for good: **there is no self-service recovery code in Nuxbe.** There is no printed code in a safe, only your administrator, who can reset the second factor.

See [What to Do If You Lose Access](10-manage-two-factor.md#what-to-do-if-you-lose-access). As a precaution: register **several passkeys** on different devices, use an authenticator app **with cloud backup**, and synchronise your password manager **across platforms**.

## What Next?

You know the concept, now for the practice:

- [Setting Up Two-Factor Authentication](8-set-up-two-factor.md) -- activate a TOTP app and a passkey in your profile, or go through the enforced initial setup.
- [Signing In with Two-Factor Authentication](9-signing-in-with-two-factor.md) -- how the login changes once 2FA is active.
- [Managing Two-Factor Authentication](10-manage-two-factor.md) -- add, replace or remove methods.
