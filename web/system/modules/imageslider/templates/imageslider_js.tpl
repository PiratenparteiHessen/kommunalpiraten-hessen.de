<script type="text/javascript">
<!--//--><![CDATA[//><!--
window.addEvent('domready',function()
{
	
var V<?php echo $this->id; ?> = new viewer( $$('#elements<?php echo $this->id; ?> img)' ),
{
	sizes: {w:<?php echo $this->arrImagesliderSize[0]; ?>,h:<?php echo $this->arrImagesliderSize[1]; ?>},
	mode: 'rand',
	modes: [<?php echo $this->EffectType; ?>],
	fxOptions:{ duration: <?php echo $this->effect_duration; ?> <?php echo $this->EffectsExtended; ?> },
	interval: <?php echo $this->rotation_interval; ?>
});
<?php echo $this->play; ?>;

});
//--><!]]>
</script>