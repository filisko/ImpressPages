<div class="_pages">
    <?php echo $pagination->render(ipFile('Ip/Internal/Grid/view/pagination.php')); ?>
    <?php echo ipView('Ip/Internal/Grid/view/pageSize.php', $this->getVariables()); ?>
</div>
