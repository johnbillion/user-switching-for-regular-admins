# User Switching for Regular Admins

This plugin extends [the User Switching plugin](https://wordpress.org/plugins/user-switching/) to allow regular administrators on Multisite installations to switch users, which is not normally allowed.

## Is this dangerous?

It's not inherently dangerous, but what it does do is introduce some amount of privilege escalation (which is why the main User Switching plugin does not allow this).

* It grants regular Administrators the ability to impersonate another user on their site within the network which means they can subsequently change that user's profile information, which they normally cannot do.
* It potentially grants regular Administrators editorial or administrative access to sites on the network that they don't normally have access to. For example, User A is an Administrator on Site 1 and Site 2, and User B is only an Administrator on Site 1. User B could switch into User A and now they have access to Site 2 as an Administrator.

As the owner of the Multisite installation, you are best placed to decide whether the regular administrators on your installation are trusted not to abuse this capability.

Please take a look at the FAQ of the User Switching plugin where I've written about related safeguards you can take.

## Can regular admins switch into Super Admin accounts?

No.

## License

GPL v2 or later
