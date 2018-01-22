<section class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?= do_shortcode('[gravityform id="2" title="false" description="false"]'); ?>
      </div>
    </div>
  </div>
</section>

<footer class="container-fluid bg-footer">

	<div class="row px-5 py-4">

		<div class="col-6 text-left">
			<p class="text-muted"><small>Copyright &copy; <?= date('Y') ?> <a href="<?= esc_url(home_url('/')); ?>" title="<?= bloginfo('name'); ?>"><?= bloginfo('name'); ?></a></small></p>
		</div>

		<div class="col-6 text-right">
			<p class="text-muted"><small>Realisatie: <a href="https://indrukwekkend.nl/" title="Indrukwekkend">Indrukwekkend</a></small></p>
		</div>

	</div>

</footer>
