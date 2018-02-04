geoPHP
======

Provides integration with the geoPHP library: https://geoPHP.net

This module does not provide any direct functionality to end-users or 
site-administrators. Install it only if another module requires it.

GeoPHP is a open-source native PHP library for doing geometry operations. 
It is written entirely in PHP and can therefore run on shared hosts. It can 
read and write a wide variety of formats (WKT, WKB, GeoJSON, KML, GPX, 
GeoRSS). It works with all Simple-Feature geometries (Point, LineString, 
Polygon, GeometryCollection etc.) and can be used to get centroids, 
bounding-boxes, area, and a wide variety of other useful information.

geoPHP also helpfully wraps the GEOS php extension so that applications can 
get a transparent performance increase when GEOS is installed on the server. 
When GEOS is installed, geoPHP also becomes fully compliant with the OpenGIS® 
Implementation Standard for Geographic information. With GEOS you get the 
full-set of openGIS functions in PHP like Union, IsWithin, Touches etc. This 
means that applications get a useful "core-set" of geometry operations that 
work in all environments, and an "extended-set"of operations for environments 
that have GEOS installed.

Installation
------------

- Install this module using the official Backdrop CMS instructions at
  https://backdropcms.org/guide/modules

Documentation
-------------

Read the API Reference at: https://geoPHP.net/api.html
Learn about GEOS integration at: https://geoPHP.net/geos.html

Current Maintainers
-------------------

- Wes Jones (https://github.com/earthday47)
- gifad (https://github.com/gifad)

Credits
-------

- Ported to Backdrop CMS by gifad (https://github.com/gifad)
- Originally written for Drupal by Patrick Hayes (phayes)
- geoPHP library written and maintained by Patrick Hayes (phayes)
- The following organizations sponsored development of geoPHP: HighWire Press, 
  GeoMemes Research, GeoScienceWorld
