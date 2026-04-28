#!/usr/bin/env bash
set -euo pipefail

# Regenerate all Kiota-based REST clients from their OpenAPI specs.
# Run this whenever a spec file is updated.
# Requires: kiota CLI on PATH (dotnet global tool: microsoft.openapi.kiota)

echo "Regenerating REST clients via Kiota..."

kiota generate -l php \
  -d specs/sell_inventory_v1_oas3.yaml \
  -c InventoryApiClient \
  -n 'EBay\ListingManagement\Generated\Inventory' \
  -o src/Generated/Inventory \
  --ebc --co

kiota generate -l php \
  -d specs/sell_feed_v1_oas3.yaml \
  -c FeedApiClient \
  -n 'EBay\ListingManagement\Generated\Feed' \
  -o src/Generated/Feed \
  --ebc --co

kiota generate -l php \
  -d specs/commerce_media_v1_beta_oas3.yaml \
  -c MediaApiClient \
  -n 'EBay\ListingManagement\Generated\Media' \
  -o src/Generated/Media \
  --ebc --co

kiota generate -l php \
  -d specs/sell_stores_v1_oas3.yaml \
  -c StoresApiClient \
  -n 'EBay\ListingManagement\Generated\Stores' \
  -o src/Generated/Stores \
  --ebc --co

echo "Done. Run 'composer dump-autoload' if new namespaces were added."
