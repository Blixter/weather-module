#!/usr/bin/env bash

# Copy the configuration files
rsync -av vendor/blixter/weather/config ./

# Copy the controller and model files
rsync -av vendor/blixter/weather/src ./

# Copy the view files
rsync -av vendor/blixter/weather/view ./

# Copy the test files
rsync -av vendor/blixter/weather/test ./