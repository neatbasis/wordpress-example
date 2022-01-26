# Wordpress on Docker Example

# Topics
- docker
- docker-compose
- git
- Wordpress

# Setup

1. Clone the repo ```git clone git@github.com:neatbasis/wordpress-example.git```
2. Start the stack ```cd wordpress-example;docker-compose up -d```
3. Open your browser at [http://localhost:8000/](http://localhost:8000/) to continue with Wordpress configuration

# Usage:

```bash
# Clone this repo
git clone git@github.com:neatbasis/wordpress-example.git

# Init and fetch submodules
git submodule update --init --recursive

# Change directory
cd wordpress-example

# Start detached
docker-compose up -d

# Stop the stack
docker-compose down

# This removes all the volumes and shuts down the stack.
# A hard reset if you will.
docker-compose down -v

```

# Quick reset

> If you feel you have done so many bad things
>  to your wordpress installation that it may summon ctulhu, try the ```docker-compose down -v``` command to start over fresh

# Fail faster

> Preventing something from failing while it’s going to fail doesn’t solve anything. It does not solve the problem, it just hides the problems. And the longer it takes for the problems to appear on the surface, the harder it is to fix and the more it costs.

> If an error occurs, fail immediately and visibily.
>

# Fail smarter

> The aim of poka-yoke is to design the process so that mistakes can be detected and corrected immediately, eliminating defects at the source

A methodic approach to build up poka-yoke countermeasures has been proposed by the Applied Problem Solving (APS) methodology,[8] which consists of a three-step analysis of the risks to be managed:

- Identification of the need
- Identification of possible mistakes
- Management of mistakes before satisfying the need

This approach can be used to emphasize the technical aspect of finding effective solutions during brainstorming sessions.

### List available test definitions

```bash
# in wordpress-example
$ docker-compose -f docker-compose-test.yml up -d
$ docker run --rm -t -v $(pwd):/var/work qualiboo/testing-behat --definitions=i
```

### Run tests

```bash
# run tests
$ docker-compose -f docker-compose-test.yml run behat --profile=firefox
```

### List running containers in this stack
```bash
$ docker-compose ps
```

### Logs for running containers in this stack

```bash
$ docker-compose logs -f
```

## Example: Set up a theme under the themes directory

```bash
# Example, add a new theme to this project

# This adds the theme to the project as a git submodule
$ git submodule add git@github.com:tex0gen/bootstrap5-wordpress-theme.git themes/bootstrap5-wordpress-theme

# Change directory to the theme dir
$ cd themes/bootstrap5-wordpress-theme

# Read the Documentation
$ less README.md

# Fetch Bootstrap5 Wordpress theme requirements
$ npm install
```

## Mount the theme directory in docker-compose.yml


```yaml
wordpress:
  depends_on:
    - db
  image: wordpress:latest
  volumes:
    - wordpress_data:/var/www/html
    - ./themes/bootstrap5-wordpress-theme:/var/www/html/wp-content/themes/bootstrap5-wordpress-theme

```

## Extra documentation

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
