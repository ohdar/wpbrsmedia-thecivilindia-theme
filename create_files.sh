#!/bin/bash

# Define the array of categories

categories=(
   "indianrivers"
#  "mythology"
#  "yoga"
#  "ayurveda"
#  "healthcare"
#  "animalkingdom"
#  "plantkingdom"
#  "schoolprofile"
#  "companyprofile"
#  "nonprofitorg"
#  "govtorganization"
#  "ministryprofile"
#  "businessplan"
)

# Loop through each category and create two files: sidebar- and single-
for category in "${categories[@]}"; do
  sidebar_file="sidebar-${category}.php"
  single_file="single-${category}.php"
  template_file="template-${category}.php"
  
  echo "// Sidebar template for ${category}" > "$sidebar_file"
  echo "// Single template for ${category}" > "$single_file"
  echo "// Template template for ${category}" > "$template_file"
  
  echo "Created: $template_file and $sidebar_file and $single_file"
done
