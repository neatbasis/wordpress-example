# Wordpress on Docker Example

## Usage:

```
# Clone this repo
git clone git@github.com:neatbasis/wordpress-example.git

# Change directory
cd wordpress-example

# Start detached
docker-compose up -d

# Stop the stack
docker-compose down

# If you feel you have done so many bad things to your wordpress installation that it may summon ctulhu
# This removes all the volumes and shuts down the stack. A hard reset if you will.
docker-compose down -v

```

### docker-compose down

```
Usage: down [options]

Options:
    --rmi type              Remove images. Type must be one of:
                              'all': Remove all images used by any service.
                              'local': Remove only images that don't have a
                              custom tag set by the `image` field.
    -v, --volumes           Remove named volumes declared in the `volumes`
                            section of the Compose file and anonymous volumes
                            attached to containers.
    --remove-orphans        Remove containers for services not defined in the
                            Compose file
    -t, --timeout TIMEOUT   Specify a shutdown timeout in seconds.
                            (default: 10)
```



Open your browser at [http://localhost:8000/](http://localhost:8000/) to continue wordpress configuration


```
# Example, add a new theme to this project
$ git submodule add git@github.com:tex0gen/bootstrap5-wordpress-theme.git themes/bootstrap5-wordpress-theme
$ cd themes/bootstrap5-wordpress-theme
$ npm install
```
