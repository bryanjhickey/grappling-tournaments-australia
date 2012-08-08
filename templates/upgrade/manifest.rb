description 'Foundation Compass Gem'

# Images exist in non-standard location so they will play nicely with
# Rails asset-pipeline.  So this method allows us to copy images from
# outside the compass template
def copy_images_from(relative_path, prefix_path)
  absolute_path = File.join(File.dirname(__FILE__), relative_path, prefix_path)
  Dir.glob("#{absolute_path}/*.*") do |img|
    image "#{relative_path}/#{prefix_path}/#{File.basename(img)}", 
      :to => "#{prefix_path}/#{File.basename(img)}"
  end
end

def copy_js_from(relative_path, prefix_path, excludes=[])
  absolute_path = File.join(File.dirname(__FILE__), relative_path, prefix_path)
  js_files = Dir.glob("#{absolute_path}/*.js")
  js_files.reject! {|f| excludes.include? File.basename(f)}
  js_files.each do |js|
    javascript "#{relative_path}/#{prefix_path}/#{File.basename(js)}", 
      :to => "#{prefix_path}/#{File.basename(js)}"
  end
end

copy_images_from("../../vendor/assets/images", "foundation/orbit")
copy_js_from("../../vendor/assets/javascripts", "foundation", ["index.js"])

help %Q{

If you need help, email us at foundation@zurb.com or visit foundation.zurb.com"

}

welcome_message %Q{

w00t! You've upgraded the JavaScript and Image assets for your project.  Now go forth and rock 'n roll!

}