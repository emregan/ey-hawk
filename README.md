# ey-hawk

## git forking worklow

```
git clone https://github.com/northpoint/ey-hawk.git
git remote add upstream https://github.com/northpoint/ey-hawk.git
git remote set-url origin https://github.com/<your fork>/ey-hawk.git
```

## deployments

You'll either need to VPN into the site, or have the network security rule (temporarily) removed, then:

```
sh deploy
```

Can add ssh keys, so there is at least some hope in this world.