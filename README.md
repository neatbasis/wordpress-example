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

Open your browser at [http://localhost:8000/](http://localhost:8000/) to continue wordpress configuration
