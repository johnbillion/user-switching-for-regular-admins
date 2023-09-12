# User Switching for Regular Admins

This plugin extends [the User Switching plugin](https://wordpress.org/plugins/user-switching/) to allow regular administrators on Multisite installations to switch users, which is not normally allowed.

## Is this dangerous?

It's not inherently dangerous, but what it does do is introduce a small level of privilege escalation (which is why the main User Switching plugin does not allow this). It grants regular administrators the ability impersonate another user on their site within the network which means they can subsequently change that user's profile information, which they normally cannot do.

As the owner of the Multisite installation, you are best placed to decide whether the regular administrators on your installation are trusted not to abuse this capability.

Please take a look at the FAQ of the User Switching plugin where I've written about related safeguards you can take.

## Can regular admins switch into Super Admin accounts?

No.

## License

GPL v2 or later
