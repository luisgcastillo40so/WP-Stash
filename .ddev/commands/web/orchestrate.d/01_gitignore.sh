#!/bin/bash

cat << 'EOF' > ".gitignore"
# Ignores everything in the docroot (docroot in config.yaml); this path may not be included in the standard .ddev/.gitignore.
*
EOF
