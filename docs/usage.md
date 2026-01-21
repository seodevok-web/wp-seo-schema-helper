# Usage Documentation

## When the Plugin Runs
The plugin automatically outputs JSON-LD structured data when the following conditions are met:
- The page is a singular post or page
- The WordPress theme correctly calls the `wp_head()` function

No manual configuration is required.

## Where the Output Appears
The schema markup is injected into the HTML `<head>` section of the page as a `<script type="application/ld+json">` block.

## Intended Use Case
This plugin is designed to:
- Demonstrate a minimal JSON-LD implementation
- Serve as a reference for learning WordPress hooks
- Act as a starting point for further schema customization

## Limitations
- Only outputs basic `WebPage` schema
- Does not include structured data for articles, products, or organizations
- No validation or conditional logic based on content type
