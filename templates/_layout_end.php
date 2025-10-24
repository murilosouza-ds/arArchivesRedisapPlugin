    <?php include_slot('post'); ?>
    <?php echo get_partial('footer'); ?>

    <div vw class="enabled">
      <div vw-access-button class="active"></div>
      
      <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
      </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
      new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>

    <script>
        function loadVideo() {
            const container = document.querySelector(".video-container");
            container.innerHTML = `
                <iframe width="484" height="273" src="https://www.youtube.com/embed/x7HEOtJdGG4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            `;
        }
    </script>
  </body>
</html>
