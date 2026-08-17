# Security Settings

In **Security settings** you decide, as an administrator, which sign-in methods are allowed or mandatory in your tenant. You also reset two-factor authentication for individual users here when they have lost access.

> **Note:** This page is for tenant administrators. Users find everything they need to know about 2FA in [Two-Factor Authentication -- Basics](../1-getting-started/7-two-factor-basics.md) and [Managing Two-Factor Authentication](../1-getting-started/10-manage-two-factor.md).

## Opening the Security Settings

1. Click **Settings** in the sidebar.
2. Choose **Security settings**.

<!-- Screenshot: security settings with both switches -->

You see two global options:

- **Enforce two-factor authentication**
- **Allow login by email link**

Changes to either option take effect only after you click **Save**.

## Enforcing Two-Factor Authentication for Everyone

Tick **Enforce two-factor authentication** if every user in your tenant must register a second factor.

<!-- Screenshot: toggle for mandatory 2FA highlighted -->

**What happens after you enable it:**

- Users who already set up a second factor (TOTP or passkey) notice nothing at first and sign in as usual.
- Users **without** a second factor are redirected to an enforced setup the next time they open a protected page (dashboard, orders, contacts, settings and so on), see [Enforced Initial Setup](../1-getting-started/8-set-up-two-factor.md#enforced-initial-setup). Only after successfully setting up TOTP or a passkey do they reach the application again.
- If a user's 2FA is deleted, for example because they lost their phone and you performed the reset, the requirement applies again at the next login.

> **Note:** Do **not** enable this option without warning. Tell your users beforehand that they need a phone with an authenticator app or a passkey-capable device. Otherwise you spend the afternoon on ten calls saying "I cannot log in any more".

## Allowing Login by Email Link

The second switch, **Allow login by email link**, controls so-called **magic login links**:

<!-- Screenshot: toggle for magic login links highlighted -->

- **On:** a user can enter their email address on the sign-in page and have a login link sent to their mailbox. One click on the link signs them in without a password. Handy for users who do not have their password to hand.
- **Off:** magic login links are disabled. Users must use a password or a passkey.

> **Note:** Magic login links assume the user's mailbox is secure. Whoever has access to the mailbox can sign in without the password. Disable the option in security-sensitive environments.

## Enforcing Two-Factor for a Single User

If you do **not** want to enforce 2FA globally but only for certain users, accounting or management for example:

1. In the settings go to **Users & permissions > Users**.
2. Click the user to open their edit page.
3. Scroll to the **Two-factor authentication** section.

<!-- Screenshot: per-user toggle and reset button in the user edit page -->

4. Enable the **Enforce two-factor authentication** switch.
5. Click **Save** at the bottom.

The user is guided through the enforced initial setup at their next login. Users without this switch remain free to choose.

> **Note:** The per-user requirement and the global one combine as a logical "or": as soon as **one** of them applies, the user is affected. With the global requirement enabled, the per-user switch has no additional effect.

## Resetting a User's Two-Factor

When a user has lost access to their second factor (phone gone, authenticator app deleted, passkey device broken), only you as the administrator can restore access.

1. Go to **Users & permissions > Users** as above and open the user.
2. In the **Two-factor authentication** section click the red **Reset two-factor authentication** button.

<!-- Screenshot: reset button highlighted -->

3. A confirmation dialog asks whether this two-factor authentication should really be deleted.

<!-- Screenshot: confirmation dialog with the delete button highlighted -->

4. Click **Delete** to perform the reset, or **Cancel** if you picked the wrong user.

**What the reset does:**

- The user's TOTP secret is deleted. Their authenticator app keeps producing codes, but the codes no longer work.
- All of the user's passkeys are deleted. They stay visible on their devices but no longer work with Nuxbe.
- The user can sign in with email and password again.

**What happens next:**

- If 2FA is enforced for this user, globally or per user, they are taken straight to the initial setup at the next login and must register a new second factor.
- If 2FA is optional, the user decides whether to set up a second factor again, see [Setting Up Two-Factor Authentication](../1-getting-started/8-set-up-two-factor.md).

> **Note:** Before you perform the reset, verify through another channel, a phone call with the user for example, that the request really comes from the right person. A reset triggered by an attacker who only knows the email address would make 2FA pointless.

> **Note:** The label of the reset button and the confirmation dialog speak of "the two-factor authentication" in the singular. In fact the reset deletes **all** registered methods of that user, TOTP **and** every passkey. There is no separate passkey-only reset.

## What Next?

- The user's view of the initial setup: [Setting Up Two-Factor Authentication](../1-getting-started/8-set-up-two-factor.md).
- The user's view of the daily sign-in: [Signing In with Two-Factor Authentication](../1-getting-started/9-signing-in-with-two-factor.md).
- The user's view of managing it and of losing access: [Managing Two-Factor Authentication](../1-getting-started/10-manage-two-factor.md).
- Background and comparison of the methods: [Two-Factor Authentication -- Basics](../1-getting-started/7-two-factor-basics.md).
