<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
    <style>
        .triangle-top:after {
            border-left-color: <?php the_field('arrow_color', 2) ;?>
        }
        .triangle-home-bg, .home-hero {
            background-color: <?php the_field('background_color', 2); ?>;
        }
        .h2-select-hex {
        <?php if(get_field('arrow_color', 2)): ?>
            color: <?php the_field('call_to_action_text_color', 2); ?>
            <?php else : ?>
            color: <?php the_field('arrow_color', 2) ;?>
        <?php endif; ?>
        }
        .logo-bg {
        <?php if(get_field('arrow_color', 2)): ?>
            background-color: <?php the_field('logo_color', 2); ?>;
            <?php else : ?>
            color: <?php the_field('arrow_color', 2) ;?>
        <?php endif; ?>

        }
    </style>
</head>
