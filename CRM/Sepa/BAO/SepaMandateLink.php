<?php
use CRM_Sepa_ExtensionUtil as E;

class CRM_Sepa_BAO_SepaMandateLink extends CRM_Sepa_DAO_SepaMandateLink {


  public static $LINK_CLASS_REPLACE  = 'REPLACE';

  /**
   * Create a new mandate link
   *
   * @param int $mandate_id            the mandate to link
   * @param int $entity_id             the ID of the entity to link to
   * @param string $entity_table       table name of the entity to link to
   * @param string $class              link class, max 16 characters
   * @param bool $is_active            is the link active? default is YES
   * @param string $start_date         start date of the link, default NOW
   * @param string $end_date           end date of the link, default is NONE
   */
  public static function createMandateLink($mandate_id, $entity_id, $entity_table, $class, $is_active = TRUE, $start_date = 'now', $end_date = NULL) {
//    self::updateLink(NULL, $mandate_id, $entity_id, $entity_table, $class, $is_active, $start_date, $end_date);
  }

  /**
   * Create a new mandate link
   *
   * @param int $mandate_id            the mandate to link
   * @param int $entity_id             the ID of the entity to link to
   * @param string $entity_table       table name of the entity to link to
   * @param string|array $class        link class, max 16 characters
   * @param bool $is_active            is the link active? default is YES
   * @param string $start_date         start date of the link, default NOW
   * @param string $end_date           end date of the link, default is NONE
   *
   * @return array of CRM_Sepa_BAO_SepaMandateLinks
   */
  public static function getMandateLinks($mandate_id, $class = NULL, $entity_id = NULL, $entity_table = NULL, $is_active = TRUE, $start_date = NULL, $end_date = NULL) {
    // TODO
  }

}
