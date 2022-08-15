import { registerBlockType } from '@wordpress/blocks';
import { 
  useBlockProps, RichText
} from '@wordpress/block-editor';
import icons from '../../icons.js'
import './main.css'

registerBlockType('udemy-plus/page-header', {
  icon: icons.primary,
	edit() {
    const blockProps = useBlockProps();

    return (
      <>
        <div {...blockProps}>
          <div className="inner-page-header">
            <h1>Category: Cats</h1>
          </div>
        </div>
      </>
    );
  }
});