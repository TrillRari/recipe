{\rtf1\ansi\ansicpg1252\cocoartf2708
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\paperw11900\paperh16840\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0\fs24 \cf0 <html>\
  <head>\
    <title>Recipe Generator</title>\
  </head>\
  <body>\
    <h1>Recipe of the Day</h1>\
    <?php\
      $recipes = array(\
        "Pizza Margherita",\
        "Spaghetti Bolognese",\
        "Chicken Alfredo",\
        "Stir-Fry Vegetables and Tofu",\
        "Grilled Salmon with Lemon Butter",\
        "Beef Tacos",\
        "Tomato Basil Soup",\
        "Roasted Chicken with Potatoes",\
        "Vegetable Curry",\
        "BBQ Ribs"\
      );\
      $selected_recipe = $recipes[array_rand($recipes)];\
    ?>\
    <p>\
      <?php echo $selected_recipe; ?>\
    </p>\
  </body>\
</html>\
}