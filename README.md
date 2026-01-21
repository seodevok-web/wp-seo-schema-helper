# WP SEO Schema Helper

## Overview
WP SEO Schema Helper is a lightweight WordPress plugin designed to output basic JSON-LD structured data for singular content pages.

The plugin focuses on simplicity and is intended to demonstrate how structured data can be implemented at a basic level within a WordPress environment.

## Purpose
This project was created for educational and experimental purposes, particularly to explore:
- Basic JSON-LD implementation
- WordPress hooks related to frontend output
- Simple schema markup structure

It is not intended to replace full-featured SEO plugins.

## Features
- Outputs basic WebPage schema using JSON-LD
- Automatically runs on singular content (posts and pages)
- No settings or configuration required
- Minimal performance impact

## Installation
1. Download or clone this repository.
2. Upload the plugin folder to the `/wp-content/plugins/` directory.
3. Activate the plugin through the WordPress admin panel.

## Example Output
When enabled, the plugin adds a JSON-LD script similar to the following in the page source:

```json
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Example Page Title",
  "url": "https://example.com/example-page"
}
